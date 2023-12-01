<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("products.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //create products

        // 1. validate
        $validated = $request->validate([
            "name" => "required|max:20|min:5",
            "description" => "required|max:100|min:5",
            "price" => "required",
            "image" => "required|image|mimes:png,jpg|max:5120",
            "discount" => "min:0",
        ]);


        // 2. create image path

        $imagePath = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $imagePath);

        // 3. store the product with user id

        $request->user()->products()->create([
            "name" => $validated["name"],
            "description" => $validated["description"],
            "price" => $validated["price"],
            "image" => $imagePath,
            "discount" => $validated["discount"],
        ]);

        return redirect()->route("products.index")->with("success", "Successfully Added the product!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}