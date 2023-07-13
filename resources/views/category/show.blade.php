<x-layout>


    <div class="container margin-show-custom">
        <div class="row justify-content-center">

            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center text-center">
                @forelse ($category->products as $product)
                <x-product.card
                :product="$product"
                />               
                @empty
                 <h2>Non sono presenti annunci per la categoria : <h2 class="fw-bolder">{{$category->name}}</h2></h2> 
                
                 @auth  
                 <a href="{{route('product.create')}}" class="text-decoration-none"><button class="button-86 mt-3" role="button">Crea un nuovo annuncio</button></a>
                @endauth  
                
                @endforelse
            </div>
            <div class="col-12 col-md-6 d-flex flex-column align-items-start justify-content-center">
                <img src="/img/pc-header.png" style="max-width: 370px" alt="">
            </div>
          
           
        </div>
    </div>


</x-layout>


