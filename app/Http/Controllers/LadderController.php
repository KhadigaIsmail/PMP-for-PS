<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ladder;
use DB;

class LadderController extends Controller
{
    public  function index()
    {
        $ladders = Ladder::all();
       if(auth()->user()){
        $userladdersids = DB::table('users')->where('users.id', auth()->user()->id)
            ->join('ladders_users', 'users.id', '=', 'ladders_users.userId')
            ->join('ladders', 'ladders.id', '=', 'ladders_users.ladderId')
            ->select('ladders.id')
            ->get()->toArray();
            //dd($ladders);
            for($i=0;$i<count($ladders);$i++)
            {   
                $ladders[$i]['joined']=0;
                foreach ($userladdersids as $ladderid) 
                {
                    
                    if($ladders[$i]['id']==$ladderid->id)
                    {
                        $ladders[$i]['joined']=1;
                    }
                    
                }
            }
        }
        
        
        return view('exploreladders',compact('ladders'));
    }
    
    public function store(Request $request)
    {
        $data = [
            "name" => $request->laddername];
        Ladder::create($data);
        session()->flash('success', trans('Created Successfully'));  
    }
    public function getladders()
    {
        $ladder = Ladder::all();
        return view('admin.addproblemtoladder',compact('ladder'));

    }
}
