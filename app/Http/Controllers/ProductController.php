<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::orderBy('created_at')->paginate(10);
        return view("products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view("products.create", compact("categories"));
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
            "category" => "required|string",
            "discount" => "min:1|max:2",
        ]);


        // // 2. create image path

        // $imagePath = time() . '.' . $request->image->extension();
        // $request->image->move(public_path('image'), $imagePath);

        // 3. store the product with user id

        // dump(Model::getIdByName($request->category));

        $category_id = Category::where("name", $validated["category"])->first()->id;

        // dump($category_id);
        $request->user()->products()->create([
            "name" => $validated["name"],
            "description" => $validated["description"],
            "price" => $validated["price"],
            "category" => $validated["category"],
            "discount" => $validated["discount"],
            "category_id" => $category_id
        ]);

        return redirect()->route("products.create")->with("success", "Successfully Added the product!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        // return view("products.index");
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
