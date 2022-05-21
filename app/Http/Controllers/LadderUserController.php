<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class LadderUserController extends Controller
{
    public function store($id)
    {
        if(auth()->user()){
        DB::table('ladders_users')->insert(
            [
                    'userId' => auth()->user()->id  ,
                     "ladderId" => $id
                ]
            );
            return back();
        }
        else
        {
         
            return Redirect::back()->withErrors(['guest' => 'You Should Sign in to Join Ladders']);
            
        }
    }
    public function joinedRecently()
    {
        if(auth()->user())
        {
            $recentlyJoinedLadders = DB::table('users')->where('users.id', auth()->user()->id)
            ->join('ladders_users', 'users.id', '=', 'ladders_users.userId')
            ->join('ladders', 'ladders.id', '=', 'ladders_users.ladderId')
            ->select('ladders.name','ladders.id')
            ->get()
            ->take(5);
           
            return view('index',compact('recentlyJoinedLadders'));
        }
        else 
        {
            return view('index');
        }
    }

    public function userLadders()
    {
        $ladders = DB::table('users')->where('users.id', auth()->user()->id)
            ->join('ladders_users', 'users.id', '=', 'ladders_users.userId')
            ->join('ladders', 'ladders.id', '=', 'ladders_users.ladderId')
            ->select('ladders.name','ladders.id')
            ->get()->toArray();
        //dd($ladders->toArray());
        return view('showuserladders',compact('ladders'));
    }
}
