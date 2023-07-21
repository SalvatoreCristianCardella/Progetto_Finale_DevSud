<x-layout> 
    <x-slot name="titlepage"> risultati </x-slot> 
    <h2 class="mx-5 text-center">Risultati per : <span class="text-danger"> {{$searched}}</span></h2>
    <div class="container mt-5" >
         <div class="row"> 
            @forelse ($products as $product)
             <div class="col-12 col-md-3 mx-5"> 
                <x-product.card :product="$product" /> 
            </div> 
            @empty 
            <div class="alert alert-info" role="alert"> 
                <p class="lead"><i class="fa-solid fa-circle-xmark fa-lg mx-2"></i>Nessun risultato trovato per la chiave di ricerca: {{ $searched }}</p> 
            </div> 
            @endforelse 
            {{$products->links()}}
        </div> 
    </div> 

</x-layout>