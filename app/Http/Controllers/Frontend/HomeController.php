<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class HomeController extends Controller
{
    public function items(){
        $foods5 = Food::latest()->take(5)->get();
        $foods2 = Food::latest()->skip(5)->take(2)->get();
        $foods = Food::latest()->offset(7)->limit(PHP_INT_MAX)->get();
        return view('frontend.item',compact('foods5','foods2','foods'));
    }
    public function itemDetails($id){
        $food = Food::findOrFail($id);
        $items = Food::where('id', '!=', $id)->latest()->take(6)->get();
        return view('frontend.item-details', compact('food','items'));
    }
}
