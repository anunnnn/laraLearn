<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(){
        $products = Product::all();
        return view ('product.index',
            [
                'products' => $products,
            ]
   );
   }

   public function create(){
        return view('product.create');
   }

   public function store( Request $request ){
        Product::create([
            'name'=> $request->name,
            'description'=> $request->description,
            'price'=> $request->price,
            'quantity'=> $request->quantity,
            'category_id'=> $request->category_id,
        ]);

        return redirect()->route('product.index')->with('success', 'Product created successfully');
   }

    public function show( $id ){
        $product = Product::findOrFail( $id );
        return view('product.show', compact('product'));
}


   public function edit( $id ){
        $product = Product::findOrFail( $id );
        return view('product.edit', compact('product'));
   }

   public function update( Request $request, $id ){
        $product = Product::findOrFail( $id );
        $product->update([
            'name'=> $request->name,
            'description'=> $request->description,
            'price'=> $request->price,
            'quantity'=> $request->quantity,
            'category_id'=> $request->category_id,
        ]);

        return redirect()->route('product.index')->with('success', 'Product Updated Successfully');
   }

   
   public function destroy( $id ){
        $product = Product::findOrFail( $id );
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product Deleted Successfully');
   }

//    public function delete( $id ){
//         $product = Product::finfOrFail( $id );
//    }

}
