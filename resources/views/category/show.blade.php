<x-layout>
    <div class="container">
        <div class="row">
           @forelse ($category->products as $product)
           <x-product.card
           :product="$product"
           />               
           @empty
            <h2>Non presenti annunci per questa categoria</h2> 
            <h5>Pubblica un  <a class="text-decoration-none" href="{{route('product.create')}}">nuovo annuncio</a></h5>
           @endforelse
           
        </div>
    </div>


</x-layout>