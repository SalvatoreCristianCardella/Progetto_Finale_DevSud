<x-layout>
    @forelse ($productscategory as $product)
    <div class="container margin-show-custom">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center text-center">
                <x-product.card
                :product="$product"/>               
                @empty
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-7 d-flex flex-column align-items-center justify-content-center ">
                            <h2>Non sono presenti annunci per la categoria : 
                                <h2 class="fw-bolder text-grey">{{$category->name}}</h2>
                            <p class="text-white fw-bold">Vuoi inserire un annuncio?</p> 
                            @if (Auth::user() != null)
                            @auth  
                            <a href="{{route('product.create')}}" class="text-decoration-none "><button class="button-86 mt-3" role="button">Crea un nuovo annuncio</button></a>
                            @endauth  
                            @else
                            <p class="text-white"><a data-bs-toggle="offcanvas" data-bs-target="#registrati" role="button" id="btn-open-register" class="d-inline text-decoration-none btn-revisor-footer rounded">Registrati</a> o effettua il 
                            <a data-bs-toggle="offcanvas" data-bs-target="#login" role="button" id="btn-open-login" class="d-inline text-decoration-none btn-revisor-footer rounded">Login</a>
                            </h2>
                        </p>
                           @endif
                        </div>
                        <div class="col-12 col-md-5 d-flex flex-column align-items-start justify-content-center">
                            <img src="/img/pc-header.png" style="max-width: 370px" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforelse
    
    
    
</x-layout>


