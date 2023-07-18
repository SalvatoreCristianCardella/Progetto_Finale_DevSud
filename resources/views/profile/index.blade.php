<x-layout> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-12 col-md-6 profileCustom"> 
                <img class="img-fluid rounded-circle" src="https://www.reainformatica.it/home/ri/wp-content/uploads/2021/04/51e6kpkyuIL._AC_SX425_.jpg" alt="immagine profilo utente"> 
            </div> 
            <div class="col-12 col-md-6 profileCustom"> 
                <h1>{{__('ui.indexprofile1')}}</h1> 
                <ul class="mt-4"> 
                    <li>
                        <p class="text-light fs-4 fw-bold">{{__('ui.indexprofile2')}}{{Auth::user()->name}}</p>
                    </li>
                     <li>
                        <p class="text-light fs-4 fw-bold">{{__('ui.indexprofile3')}}{{Auth::user()->email}}</p>
                    </li> 
                    <li>
                        <p class="text-light fs-4 fw-bold">{{__('ui.indexprofile4')}}{{Auth::user()->created_at}}</p>
                    </li>
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


