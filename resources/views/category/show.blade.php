<x-layout>
    <div class="container">
        <div class="row">
           @forelse ($category->products as $product)
           <x-product.card
           :product="$product"
           />               
           @empty
            <p>non presenti annunci per questa categoria</p> 
            <p>pubblicane uno <a href="{{route('product.create')}}">nuovo annuncio</a></p>
           @endforelse
           
        </div>
    </div>


</x-layout>