<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::Where("count", ">", 20)->get();

        //dd($products->toArray());
        return View("pages.products.index", compact("products"));
        
    }
    public function create (){
        return view("pages.products.create");
    }

    public function store(Request $request){
        $name = $request->name; 
        $price = $request->price;
        $count = $request->count;
        $description = $request->description;  
        
        $product = new Product();
        $product->name = $name;
        $product->price = $price;
        $product->count = $count;
        $product->description = $description;

        $product->views += 1;
        $product->increment("views");
        $product->save();

        return redirect("/products");
    }

    public function edit( $id){

        // $product = Product::where("id", "=", $id)->get()[0];
        // $product = Product::where("id", $id)->get()[0];
        // $product = Product::where("id", $id)->first();
        $product = Product::find($id);

        return view("pages.products.edit", compact(["product"]));

    }
    public function update(Request $request, $id){

        $product = Product::find($id);

        $name = $request->name; 
        $price = $request->price;
        $count = $request->count;
        $description = $request->description;  
        
        $product->name = $name;
        $product->price = $price;
        $product->count = $count;
        $product->description = $description;

        $product->save();

        // dd($product->toArray());

        return redirect("/products");

    }

    public function delete($id){
        // $product = Product::find($id);
        // $product->delete();

        ///
        Product::destroy($id);

        return redirect("/products");


    } 
}
