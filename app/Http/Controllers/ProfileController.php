<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    public function index(){
         return view('profile.index'); 
    } 
    
    public function show(){
         return view('profile.show'); 
        }

        public function imgprofile(Request $request)
        {
        
             if($request->file('profile_img') == null) {
                  $img = 'public/profile-img/default.png';
              } else {
                  $img = $request->file('profile_img')->store('public/profile-img');
              }
        
        if (!Auth::user()->image) {
             $imageprofile = Auth::user()->image()->create([
                  'user_id' => Auth::user()->id,
                  'path' => $img,
             ]);
        }else {
             if(Auth::user()->image->path!='public/profile-img/default.png'){
                  $oldpath=Auth::user()->image->path;
                  Storage::delete($oldpath);
             }
            // $oldpath=Auth::user()->image->path;
             //Storage::delete($oldpath);
             //Auth::user()->image->delete();
             $imageprofile = Auth::user()->image()->update([
                  'user_id' => Auth::user()->id,
                  'path' => $img,
             ]);
        
        }
        
        return redirect()->back()->with('success', 'Profilo aggiornato con successo!');
        }
}

