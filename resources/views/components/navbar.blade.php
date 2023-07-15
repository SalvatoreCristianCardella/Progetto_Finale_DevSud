<nav class="navbar navbar-expand-lg fixed-top nav-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home')}}"><img src="/img/logo.png" class="img-custom" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse rounded" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 w-100 d-flex justify-content-center align-items-center">
        <li class="nav-item">
          <a class="nav-link color-custom fs-6" aria-current="page" href="{{route('product.index')}}">Tutti gli articoli</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link color-custom fs-6" aria-current="page" href="{{route('product.create')}}">Crea Annuncio</a>
        </li> 
        
        {{-- ZONA REVISONE --}}
        @if(Auth::user()->is_revisor)
        <a class="nav-link nav-link color-custom fs-6 position-relative" href="{{route('revisor.index')}}">Zona revisore
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{App\Models\Product::toBeRevisionedCount()}}
          <span class="visually-hidden">unread messages</span>
        </span>
        </a>
        @else
        <li class="nav-item">
          <a class="nav-link color-custom fs-6" aria-current="page" href="{{route('revisor.become')}}">Diventa revisore</a>
        </li> 
        @endif
        {{-- FINE REVISORE --}}
        @endauth 
        <li class="nav-item">
        <div class="dropdown">
          <button class="btn color-custom fs-6 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </button>
          <ul class="dropdown-menu">
            @foreach ($categories as $category)
            <li ><a class="dropdown-item" href="{{route('category.show', compact('category'))}}">{{$category->name}}</a></li>
            @endforeach
          </ul> 
        </div>  
      </li>  
      </ul>
      
      <form class="d-flex justify-content-center align-items-center" role="search" action="{{route('product.search')}}" method="GET">
        <input class="form-control me-2 search-custom" type="search" placeholder="Cerca" aria-label="Search" name='searched'>
        <button class="button-57 d-flex justify-content-center" type="submit" role="button"><span class="text"><i class="fa-solid fa-magnifying-glass fa-bounce"></i></span><span>Cerca annunci</span></button> 
      </form>
 
      {{-- Bottoni registrati e login --}}
    <div class="d-flex justify-content-evenly align-items-center">
      @if (Auth::user() != null)
                @auth <a href="{{route('profile')}}" class="text-decoration-none"><span class="nav-link ms-5 profile-m-custom color-custom fs-5">{{ Auth::user()->name }}</span></a> @endauth
                
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn "><i class="fa-solid fa-lg fa-right-from-bracket" style="color: #284b63;"></i></button>
                </form>
      @else
    </div>
      

      <button class="button-48 mx-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#registrati" role="button" id="btn-open-register"><span class="text">Registrati</span></button>

      <button class="button-48 mx-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#login" role="button" id="btn-open-login"><span class="text">Login</span></button>
      @endif
      {{-- fine bottoni --}}
   </div>
  </div>
</nav>

{{-- Offcanvas bottoni navbar --}}
<div class="offcanvas offcanvas-end rounded" tabindex="-1" id="registrati" aria-labelledby="registrati">
  
   
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" id="btn-close-register"></button>
  
  <div class="offcanvas-body">
    <x-auth.register />

  </div>
</div>
<div class="offcanvas offcanvas-end rounded" tabindex="-1" id="login" aria-labelledby="login">
  
    {{-- <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5> --}}
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" id="btn-close-login"></button>
 
  <div class="offcanvas-body">
    <x-auth.login />
  </div>
</div>


{{-- Fine offcanvas --}}

  
