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
}
