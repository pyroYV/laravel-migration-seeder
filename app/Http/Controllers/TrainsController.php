<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    //

    public function index()
    {
        # code...
        $trains = Train::all();
        return view('welcome',compact('trains'));
    }
}
