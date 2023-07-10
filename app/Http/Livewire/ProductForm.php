<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductForm extends Component
{
    public $title;
    public $description;
    public $price;
    protected $rules = [
        'title'=>'required|min:4',
        'description'=>'required|min:15',
        'price'=>'required|numeric',
    ];
   
    public function store(){
        $this->validate();
        Product::create([
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
