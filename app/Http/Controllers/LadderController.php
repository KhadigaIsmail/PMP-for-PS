<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ladder;
class LadderController extends Controller
{
    public function store(Request $request)
    {
        $data = [
            "name" => $request->laddername];
        Ladder::create($data);
        session()->flash('success', trans('Created Successfully'));  
    }
}
