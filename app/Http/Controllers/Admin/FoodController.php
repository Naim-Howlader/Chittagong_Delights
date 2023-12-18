<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Support\Facades\File;
class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Food::latest()->get();
        return view('admin.food.food', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.food.create-food');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'price' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'image3' => 'required',
        ]);
        $image1 = $request->file('image1')->getClientOriginalName();
        $image2 = $request->file('image2')->getClientOriginalName();
        $image3 = $request->file('image3')->getClientOriginalName();

        $destination = 'uploads/foods/';
        $request->image1->move(public_path($destination),$image1);
        $request->image2->move(public_path($destination),$image2);
        $request->image3->move(public_path($destination),$image3);

        $food = Food::create([
            'category' => $request->category,
            'name' => $request->name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'price' => $request->price,
            'image1' => $destination.$image1,
            'image2' => $destination.$image2,
            'image3' => $destination.$image3,
        ]);
        session()->flash('success', 'Food Item Added');
        return redirect()->route('foods.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
