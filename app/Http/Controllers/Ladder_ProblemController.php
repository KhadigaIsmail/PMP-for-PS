<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ladder;
use App\Models\Problem;
use App\Models\ladder_problem;
use DB;
class Ladder_ProblemController extends Controller
{
    public function store(Request $request)
    {
        $ladderName = $request->laddername;
        $ladder =  Ladder::where('name',$ladderName)->get()->toArray();
        //dd();
        

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
            // ladder_problem::create([
            //     'problemId' => $problem[0]["id"]  ,
            //      "ladderId" => $ladder[0]["id"]
            // ],' ladder_problem');
        }


    }
}
