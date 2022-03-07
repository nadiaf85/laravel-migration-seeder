<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Travel;

class TravelController extends Controller

{
    public function index(){
        $list_travel = Travel::all();
        return view ('welcome', compact('list_travel'));
    }
};