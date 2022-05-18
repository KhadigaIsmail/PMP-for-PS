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
    public function getAllProblems()
    {
        $data= Http::get("https://codeforces.com/api/problemset.problems")->json();
        dd($data);
        foreach($data['result']['problems'] as $p)
        {    
            $prlm=[
                "number" => $p["contestId"],
                "letter" => $p['index'],
                "name" => $p['name']
            ];
            Problem::create($prlm);
        
        }
    }

    public function store(Request $request)
    {
        $data = $request->problemnumber;
        $problemLetter = "";
        $problemNumber = '';
        foreach ($data as $value) {
            if($value>='a'&&$value <='z')
            $problemNumber .= "$value,";
            else 
            $problemLetter .= "$value,";
            
        }
        $data = $request->except('_token');
        // dd($data);
        Problem::create($data);
        session()->flash('success', trans('Created Successfully'));
        
    }
    
}
