<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class ProductForm extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $price;
    public $category;
    public $product;
    public $images=[];
    public $image;
    public $form_id;
    public $temporary_images;
    protected $rules = [
        'title'=>'required|min:4',
        'description'=>'required|min:15',
        'price'=>'required|numeric',
        'category'=>'required',
        'images.*'=>'required|image|max:1024',
        'temporary_images.*'=>'required|image|max:1024',
    ];
    protected $messages =[
        'required'=>'il campo :attribute è richiesto',
        'min'=>'il campo :attribute è troppo corto',
        'temporary_images.required'=>'l\'immagine è richiesta',
        'temporary_images.*.image'=>'i file devono essere immagini',
        'temporary_images.*.max'=>'l\'immagine deve essere massimo di 1 mb',
        'images.image'=>'l\'immagine deve essere un\'immagine',
        'images.max'=>'l\'immagine dev\'essere massimo di 1 mb',

    ];
    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>'image|max:1204',
            

        ])){
            foreach($this->temporary_images as $image){
                $this->images[]=$image;
            }
        }
    }
    public function removeImage($key){
        if(in_array($key,array_keys($this->images))){
            unset($this->images[$key]);
        }
    }
   
    public function store(){
        $this->validate();
        $this->product = Category::find($this->category)->products()->create([

            'user_id'=>Auth::user()->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
        ]);
        if(count($this->images)){
            foreach($this->images as $image){
                // $this->product->images()->create(['path'=>$image->store('images','public')]);
                $newFileName = "products/{$this->product->id}";
                $newImage = $this->product->images()->create(['path'=>$image->store($newFileName,'public')]);

                dispatch(new ResizeImage($newImage->path , 400 , 300));
            }
            File::deleteDirectory(storage_path("/app/livewire-tmp"));
        }
        $this->product->save();

        return to_route('product.index')->with('message', 'Articolo aggiunto correttamente');
        

    }
    public function render()
    {
        return view('livewire.product-form');
    }
    
}
