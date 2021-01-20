<?php

namespace App\Http\Controllers;

use App\Models\Delivery_boy;
use Illuminate\Http\Request;

class deliverBoyController extends Controller
{
    public function index ()
    {
        return view('BackEnd.deliveryBoy.add');
    }
    public function save (Request $request)
    {
        $boys = new Delivery_boy();
        $boys->delivery_boy_name = $request->delivery_boy_name;
        $boys->delivery_boy_phone_number = $request->delivery_boy_phone_number;
        $boys->delivery_boy_password = $request->delivery_boy_password;
        $boys->delivery_boy_status = $request->delivery_boy_status;
        $boys->added_on = $request->added_on;
        $boys->save();
        return back()->with('sms','Delivery Boy Saved');
    }
    public function manage ()
    {
        $boys = Delivery_boy::all();
        return view('BackEnd.deliveryBoy.manage', compact('boys'));
    }
    public function active($delivery_boy_id)
    {
        $boys = Delivery_boy::find($delivery_boy_id);
        $boys->delivery_boy_status = 1;
        $boys->save();
        return back();
    }
    public function inactive($delivery_boy_id)
    {
        $boys = Delivery_boy::find($delivery_boy_id);
        $boys->delivery_boy_status = 0;
        $boys->save();
        return back();
    }
    public function delete($delivery_boy_id)
    {
        $boys = Delivery_boy::find($delivery_boy_id);
        $boys->delete();
        return back()->with('smsdelete', 'Delivery Boy Deleted');
    }
    public function update(Request $request)
    {
        $boys= Delivery_boy::find($request->delivery_boy_id);
        $boys->delivery_boy_name = $request->delivery_boy_name;
        $boys->delivery_boy_phone_number = $request->delivery_boy_phone_number;
        $boys->save();
        return redirect('/delivery/boy/manage')->with('sms','Delivery Boy Updated');
    }

}
