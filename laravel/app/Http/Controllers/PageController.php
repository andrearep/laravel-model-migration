<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;

class PageController extends Controller
{
    public function index()
{
   
    return view('Home');
}
    public function holiday()
{
    $holidays = Holiday::all();
    return view('holiday', compact('holidays'));
}
}