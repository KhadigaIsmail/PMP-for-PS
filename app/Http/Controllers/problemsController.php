<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

class problemsController extends Controller
{
    public function index(Request $request)
    {
        //dd(gettype($request->handel));
        $data= Http::get("https://codeforces.com/api/user.status?handle={$request->handel}");
         $data = $data->json();
         $data = $data["result"];
        //dd($data->json());
        
    
        $cnt = 0; 
        $acc=array();
    
        $accTags = [];
        foreach($data as  $d){
            if($d["verdict"]== "OK"){
                if(!(Arr::exists($acc, $d["problem"]["name"])) )
                    $acc[$d["problem"]["name"]]= 1;
                    $accTags[$d["problem"]["name"]]=$d["problem"]["tags"];
               
            }
        }
            

        $wa = array();
        $cnt=0;
        foreach($data as  $d){
            $b=1;
            $name = $d["problem"]["name"];
            if(Arr::exists($acc, $name))  $b=0;
            if(Arr::exists($wa, $name)) $b=0;
            if($b) $wa[$name]=1;     
        }
        return view('problems',compact('acc','wa','accTags'));
    }
}
