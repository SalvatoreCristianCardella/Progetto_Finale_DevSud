<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductForm extends Component
{
    public $title;
    public $description;
    public $price;
    public $category_id;
    public $categories;
    // public $selectedCategoryAll = [];
    // public Product $product;
    protected $rules = [
        'title'=>'required|min:4',
        'description'=>'required|min:15',
        'price'=>'required|numeric',
        'category_id'=>'required',
    ];
    // public function mount() 
    // {
    //     $this->title = $this->product->title; 
    //     $this->description = $this->product->description; 
    //     $this->price = $this->product->price;
    //     $this->category_id = $this->product->category_id->pluck('id')->toArray(); 
    // }
   
    public function store(){
        $this->validate();
        Product::create([
            'user_id'=>Auth::user()->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'category_id' => $this->category_id,
        ]);
        $this->reset();
        return to_route('product.index')->with('message', 'Articolo aggiunto correttamente');
        

    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.product-form', compact('categories'));
    }
    
}
