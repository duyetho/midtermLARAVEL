<?php

namespace App\Http\Controllers;
use App\Models\Food;
use Illuminate\Http\Request;


class FoodController extends Controller
{
    
    public function show(T_food $t_food,$id)
    {
        $t_food =  Food::find($id);
        return view('t_foods.show',compact('t_food'));
        
    }

    public function getAdminAdd()
    {
        return view('t_foods.formAdd');
    }

}
