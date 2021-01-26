<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index()
    {
        return view('BackEnd.dish.add');
    }

    public function save_dish(Request $request)
    {
        $imgName = $request->file('dish_image');
        $image = $imgName->getClientOriginalName();
        $directory = 'BackEndSourceFile/dish_img/';
        $imgUrl = $directory.$image;
        $imgName->move($directory,$image);

        $dish = new Dish();
        $dish->dish_name = $request->dish_name;
        $dish->dish_detail = $request->dish_detail;
        $dish->dish_image = $imgUrl;
        $dish->dish_status = $request->dish_status;
        $dish->save();
        return back()->with('sms', 'Data Saved');

    }

    public function manage_dish()
    {
        $dishes = Dish::all();
        return view('BackEnd.dish.manage', compact('dishes'));
    }

    public function inactive($dish_id)
    {
        $dish = Dish::find($dish_id);
        $dish->dish_status = 0;
        $dish->save();
        return back();
    }

    public function active($dish_id)
    {
        $dish = Dish::find($dish_id);
        $dish->dish_status = 1;
        $dish->save();
        return back();
    }

    public function dish_delete($dish_id)
    {
        $dish = Dish::find($dish_id);
        $dish->delete();
        return back()->with('smsdelete', 'Dish Deleted');
    }

    public function update(Request $request)
    {
        $dish = Dish::find($request->dish_id);
        $img_main = $request->file('dish_image');


        if ($img_main) {
            $img_name = $img_main->getClientOriginalName();
            $directory = 'BackEndSourceFile/dish_img/';
            $imgUrl = $directory.$img_name;
            $img_main->move($directory,$img_name);
            $old_img = $dish->dish_image;
            if (file_exists($old_img))
            {
                unlink($old_img);
            }
            $dish->dish_name = $request->dish_name;
            $dish->dish_detail = $request->dish_detail;
            $dish->dish_image = $imgUrl;
        } else {
            $dish->dish_name = $request->dish_name;
            $dish->dish_detail = $request->dish_detail;
        }
        $dish->save();
        return back()->with('sms','Updated Data Successfully');

    }
}
