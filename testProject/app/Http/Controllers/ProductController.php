<?php

namespace App\Http\Controllers;
use App\Product;
use App\Feature;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request){
        
        $productId = uniqid();

        Product::create(array(
            'product_id'=> $productId,
            'name'=> $request->name,
            'price'=> $request->price
        ));

        foreach ($request->feature as $key => $value) {
                   
        Feature::create(array(
            'feat_id'=> uniqid(),
            'name'=> $value,
            'product_id'=> $productId
        ));
        }
    }

    public function show($id){

            $feature = Feature::where('product_id', $id)->get();
            $product = Product::where('product_id', $id)->get();

            return view('show', compact('feature','product'));

        }

    public function view($id){
        $feature = Feature::where('product_id', $id)->get();
        $product = Product::where('product_id', $id)->first();

        return view('viewprice', compact('feature','product'));

    }

    public function edit($id){
        $feature = Feature::where('product_id', $id)->get();
        $product = Product::where('product_id', $id)->first();

        return view('updateproduct', compact('feature','product'));        
    }

    public function update($id, Request $request){

        $product = Product::where('product_id', $id)->first();
        

        $product->name = $request->name;
        $product->price = $request->price;

        $product->save();

        foreach($request->feature as $key => $value){

            $feature = Feature::where('product_id', $id)->where('feat_id', $request->feat_id[$key])->first();

            $feature->name = $value;

            $feature->save();
            

        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        $feature = Feature::where('feat_id', $id);
        //$product = Product::where('product_id', $id);

        //$product->delete();
        $feature->delete();
        return redirect()->back();
    }
        
}

