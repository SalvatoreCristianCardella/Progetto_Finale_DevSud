<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $product_to_check=Product::where('is_accepted', null)->first();
        return view ('revisor.index', compact('product_to_check'));
        }
        public function acceptProduct(Product $product ){
            $product->setAccepted(true);
            return redirect()->back()->with('message','Complimenti, hai accettato l\' annuncio');
        }
        public function rejectProduct(Product $product ){
            $product->setAccepted(false);
            return redirect()->back()->with('message','Complimenti, hai rifiutato l\' annuncio');
        }
        Public function become(){
            Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
            return redirect('')->with('message','Hai richiesto con successo di diventare revisore');
        }
        public function makeRevisor(User $user){
            Artisan::call('presto:makeUserRevisor',["email"=>$user->email]);
            return redirect ('/')->with('message','L\'utente è diventato revisore');
         }
         public function edit(){
            $products_accepted=Product::all()->where('is_accepted');
            $products_rejected=Product::all()->where('is_accepted',false);
            return view ('revisor.edit', compact('products_accepted','products_rejected'));
            }

}
