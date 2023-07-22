<div class="container-fluid p-0">
  <footer>
    <ul class="nav justify-content-center border-bottom pb-3 mb-5">
      <li class="nav-item"><a href="{{route('home')}}" class="nav-link px-2 text-white">Home</a></li>
      <li class="nav-item"><a href="{{route('product.index')}}" class="nav-link px-2 text-white">{{__('ui.nav1')}}</a></li>
    </ul>
    <div class="container-fluid">
      <div class="row ">
        
        @auth
        
        @if(Auth::user()->is_revisor == false)
        
        <div class="col-6 col-md-3 d-flex justify-content-start">
          
          <p class="text-center mb-0"><a href="{{route('revisor.become')}}" class="btn-revisor-footer rounded text-decoration-none">
            {{__('ui.nav4')}}</a></p>
            
          </div>
          
          @endif
          
          @endauth
          
          <div class="col-6 col-md-12 d-flex justify-content-center">
            
            <p class="text-center text-white">
              © 2023 Presto.it, DevSud Company</p>
              
            </div>
          </div>
          
          
        </div>
      </footer>
    </div>
    
    