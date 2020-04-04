<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    function index(){
        return view('actors',[
           'actor' => Actor::all()
        ]);
    }


}
