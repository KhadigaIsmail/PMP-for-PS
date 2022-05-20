<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LadderUserController extends Controller
{
    public function store($id)
    {
        DB::table('ladders_users')->insert(
            [
                    'userId' => auth()->user()->id  ,
                     "ladderId" => $id
                ]
            );
        return back();
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
