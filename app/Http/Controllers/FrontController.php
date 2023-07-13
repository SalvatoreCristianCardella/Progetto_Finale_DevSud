<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        $products= Product::where('is_accepted',true)->take(6)->orderBy('created_at', 'desc')->get();
        return view('welcome', compact('products'));
    }

    public function show(Category $category){
     return view('category.show',compact('category'));
    }
    public function searchProduct(Request $request){
        $products = Product::search($request->searched)->where('is_accepted',true)->paginate(10);
        $searched = $request ->searched;
        return view('product.search', compact('products','searched'));
    }
}
