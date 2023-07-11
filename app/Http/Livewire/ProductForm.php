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
    public $category;
    public $product;
    protected $rules = [
        'title'=>'required|min:4',
        'description'=>'required|min:15',
        'price'=>'required|numeric',
        'category'=>'required',
    ];
    
   
    public function store(){
        $this->validate();
        $this->product = Category::find($this->category)->products()->create([
            'user_id'=>Auth::user()->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
        ]);

        $this->reset();
        return to_route('product.index')->with('message', 'Articolo aggiunto correttamente');
        

    }
    public function render()
    {
        return view('livewire.product-form');
    }
    
}
