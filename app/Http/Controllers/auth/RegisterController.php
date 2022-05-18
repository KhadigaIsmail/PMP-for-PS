<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Problem;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;
use DB;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    function index()
    {
        return view('auth.register');
    }

    

    public function loadUserProblems($handel ,$userId )
    {
        
        $data= Http::get("https://codeforces.com/api/user.status?handle={$handel}");
        $data = $data->json();
        $data = $data["result"];
     
        $cnt = 0; 
        $acc=array();

        foreach($data as  $d){
            if($d["verdict"]== "OK"){
                $p =  $d["problem"]["contestId"]. $d["problem"]["index"];
                $problemLetter=$d["problem"]["index"];
                $problemNumber=$d["problem"]["contestId"];
                
                if(!(Arr::exists($acc, $p)) )
                {
                    $acc[$p]= 1;
                    $problemId = Problem::where('letter',$problemLetter)->where('number',$problemNumber)->get();
                    $problemId = $problemId->toArray()[0]['id'];
                    DB::table('problems_users')->insert(
                    [
                        'userId' => $userId  ,
                        "problemId" => $problemId,
                        'status' => 1
                    ]
                    );
                }
            }
        }
            
        $wa = array();
        $cnt=0;
        foreach($data as  $d){
            $b=1;
            $p =  $d["problem"]["contestId"].$d["problem"]["index"];
            if(Arr::exists($acc, $p ))   $b=0;
            if(Arr::exists($wa, $p))    $b=0;
            if($b){
                $wa[$p]=1; 
                $problemId = Problem::where('letter',$problemLetter)->where('number',$problemNumber)->get();
                $problemId = $problemId->toArray()[0]['id'];
                DB::table('problems_users')->insert(
                [
                    'userId' => $userId  ,
                    "problemId" => $problemId,
                    'status' => 0
                ]
                );     
            }

        }
        
    }
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'handel' => 'required|max:255',
            'password' =>'required|confirmed',

        ]);
       
        User::create([
            'handel' => $request->handel,
            'password'=> Hash::make($request->password),
            'admin'=>false,
            
        ]);
        auth()->attempt($request->only('handel','password')); //sign in user
        $this->loadUserProblems($request->handel ,auth()->user()->id);
        return redirect()->route('index');
    }
}
