<x-layout> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-12 col-md-6"> 
                <img src="https://www.reainformatica.it/home/ri/wp-content/uploads/2021/04/51e6kpkyuIL._AC_SX425_.jpg" alt="immagine profilo utente"> 
            </div> 
            <div class="col-12 col-md-6"> 
                <h1>Informazioni Generali</h1> 
                <ul> 
                    <li>
                        <p>Nome utente: {{Auth::user()->name}}</p>
                    </li>
                     <li>
                        <p>Email utente: {{Auth::user()->email}}</p>
                    </li> 
                    <li>
                        <p>Profilo creato il: {{Auth::user()->created_at}}</p>
                    </li>
                     <li>
                        <a href="{{route('profile.show')}}">Visualizza i tuoi annunci</a>
                    </li> 
                    @if(Auth::user()->is_revisor)
                    <li>
                        <a href="{{route('revisor.edit')}}">Visualizza gli annunci già revisionati</a>
                    </li>
                    @endif
                </ul> 
            </div> 
        </div> 
   </div>
 </x-layout>


