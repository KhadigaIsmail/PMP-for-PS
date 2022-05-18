<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Problem;
use App\Models\Ladder;

class ProblemController extends Controller
{
    public function create()
    {
        return view('problemcreate');
    }
    public function updateproblemset()
    {
        $data= Http::get("https://codeforces.com/api/problemset.problems")->json();
        $numberOfProblems = Problem::all()->count();
        dd($numberOfProblems);
        $count=0;
        foreach($data['result']['problems'] as $p)
        {   
            if($count > $numberOfProblems-1 )
            $prlm=[
                "number" => $p["contestId"],
                "letter" => $p['index'],
                "name" => $p['name']
            ];
            $count++;
            Problem::create($prlm);
        
        }
    }

    
    
}
