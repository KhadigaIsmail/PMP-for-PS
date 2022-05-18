<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ladder;
class LadderController extends Controller
{
    public  function index()
    {
        $ladders = Ladder::all();
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
