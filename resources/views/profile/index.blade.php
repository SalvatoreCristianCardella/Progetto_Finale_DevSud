<x-layout> 
    <div class="container"> 
                
                <h2 class="text-center">{{__('ui.indexprofile1')}} <br> {{Auth::user()->name}} </h2> 
        <div class="row"> 
        
            <div class="col-12 col-md-6 profileCustom"> 
                <img class="img-fluid imgProfileCustom" 
                    src="@if (Auth::user()->image) {{Storage::url(Auth::user()->image->path)}} @else /img/default.png
                    @endif" alt="immagine profilo utente">
                    <form action="{{route('profile_img')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="profile_img">
                    <button class="btn text-white" type="submit">Aggiungi foto</button>
                    </form>
            </div> 

            <div class="col-12 col-md-6 profileCustom"> 
                <ul class="mt-4"> 
                   
                        <p class="text-light fs-5 fw-bold">{{__('ui.indexprofile2')}}{{Auth::user()->name}}</p>
            
                        <p class="text-light fs-5 fw-bold">{{__('ui.indexprofile3')}}{{Auth::user()->email}}</p>
                    
                        <p class="text-light fs-5 fw-bold">{{__('ui.indexprofile4')}}{{Auth::user()->created_at}}</p>
                   
                    <div class="d-flex justify-content-center my-4">
                        <a class="text-decoration-none text-white" href="{{route('profile.show')}}"> <button class="retro me-4">{{__('ui.indexprofile5')}}</button></a>
                        
                    @if(Auth::user()->is_revisor)
                        <a href="{{route('revisor.edit')}}"><button class="retro"> {{__('ui.indexprofile6')}}</button></a>
                    @endif
                </div>
                </ul> 
            </div> 
        </div> 
   </div>

 </x-layout>
 



