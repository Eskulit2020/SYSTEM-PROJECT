<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class FoodOrder extends Controller
{
    public function index()
    {
        $dishes = Dish::all();
        return view('FrontEnd.foodorder.menu', compact('dishes'));
    }
    public function backhome()
    {
        return view('FrontEnd.home');
    }
}
