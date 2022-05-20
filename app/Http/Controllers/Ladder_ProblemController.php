<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ladder;
use App\Models\Problem;
use App\Models\ladder_problem;
use DB;
class Ladder_ProblemController extends Controller
{
    public function viewLadder($id)
    {
        $userId = auth()->user()->id;
        $userJoined = DB::table('ladders_users')->where('ladderId', $id)->where('userId',$userId)->get();
        $userJoined = $userJoined->toArray();
        
        if(count($userJoined) == 0 )
            $userJoined=0;
        else 
            $userJoined=1;

        $problems = DB::table('ladders')->where('ladders.id', $id)
            ->join('ladder_problem', 'ladders.id', '=', 'ladder_problem.ladderId')
            ->join('problems', 'problems.id', '=', 'ladder_problem.problemId')
            ->select('problems.number','problems.letter','problems.name')
            ->get();
        
            $ladder = DB::table('ladders')->where('id',$id)->select('name','id','description')->get()->toArray();
        $ladder =$ladder[0];
        return view('ladderproblems',compact('problems','ladder','userJoined'));
    }
    public function store(Request $request)
    {
        $ladderName = $request->laddername;
        $ladder =  Ladder::where('name',$ladderName)->get()->toArray();

        $data = $request->problemnumber;
        $data = str_split($data);
        $problemLetter = "";
        $problemNumber = '';
        $b=1;
        foreach ($data as $value) {
            if($value>='0'&& $value <='9' && $b){
            $problemNumber .= "$value";
            }
            else{ 
            $problemLetter .= "$value";
            $b=0;
            }
            
        }
        $problem = Problem::where('number',$problemNumber) -> where('letter',$problemLetter)->get()->toArray();
        
        if( $problem[0]["id"]  && $ladder[0]["id"])
        {
            DB::table('ladder_problem')->insert(
                [
                        'problemId' => $problem[0]["id"]  ,
                         "ladderId" => $ladder[0]["id"]
                    ]
                );
                return back();
        }


    }
}
