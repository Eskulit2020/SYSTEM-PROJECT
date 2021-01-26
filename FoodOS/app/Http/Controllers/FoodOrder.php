<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodOrder extends Controller
{
    public function index()
    {
        return view('foodorder.menu');
    }
    public function backhome()
    {
        return view('homesample');
    }
}
