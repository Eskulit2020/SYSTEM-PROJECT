<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserContoller extends Controller
{
    public function index()
    {
        return view('BackEnd.user.add');
    }
    public function save_user(Request $request)
    {
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->usertype = $request->usertype;
        $users->save();
        return back()->with('sms','User Saved');
    }
    public function manage_user ()
    {
        $users = User::all();
        return view('BackEnd.user.manage', compact('users'));
    }
    public function user_delete($delivery_boy_id)
    {
        $users = User::find(id);
        $users->delete();
        return back()->with('smsdelete', 'Delivery Boy Deleted');
    }
    public function update(Request $request)
    {
        $users= User::find($request->id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->usertype = $request->usertype;
        $users->save();
        return redirect('/user/manage')->with('sms','User Updated');
    }
}
