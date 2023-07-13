<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class DocPlController extends Controller
{
    public function index(Place $place)
    {   
        return view('place', compact('place',));
    }   
}
