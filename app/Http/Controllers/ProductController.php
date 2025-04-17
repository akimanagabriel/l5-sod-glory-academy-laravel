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
        $products = Product::all();
        // $products = Product::where("price","<",1000)->get();
        // return view("product.display", compact("products", "name"));
        return view("product.display", [
            "products" => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("product.insert");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insert product
        Product::create([
            "title" => $request->pname,
            "price" => $request->pprice
        ]);
        return redirect("/display");
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
