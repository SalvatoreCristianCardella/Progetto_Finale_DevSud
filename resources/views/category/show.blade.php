<x-layout>


    <div class="container">
        <div class="row">

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
            <div class="col-12 col-md-6">
                <img src="/img/pc-header.png" style="width: 600px" alt="">
            </div>
          
           
        </div>
    </div>


</x-layout>


