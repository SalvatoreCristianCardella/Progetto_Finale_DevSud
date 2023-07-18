<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {  
       $products = Product::where('is_Accepted',true)->orderBy('created_at', 'desc')->paginate(6);
  
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
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

    // public function search(Request $request){ 
    //     $searchkey=$request->query('chiavediricerca'); 
    //     $filterproduct=[]; 
    //     $products = Product::all();
        
    //     foreach($products as $product){ 
    //         if(Str::of(Str::lower($product['title']))->contains(Str::lower($searchkey))||Str::of(Str::lower($product['description']))->contains(Str::lower($searchkey))){ 
    //             $filterproduct[]=$product; 
    //             }
    //         } 
            
    //         return view('product.search', ['products' => $filterproduct, 'searchKey' => $searchkey]); }
}
