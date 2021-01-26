<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WidgetController extends Controller
{
	public function register(){
		return view('register');
	}

    public function displayRecordusers(){
    	$data = DB::table('users')->count();
        $dish = DB::table('dishes')->count();
        $delivery_boys = DB::table('delivery_boys')->count();
    	return view('BackEnd.Home.index', ['data' => $data],['dish' => $dish]+['delivery_boys' => $delivery_boys]);
    }
}
