<x-layout> 
    <x-slot name="titlepage"> risultati </x-slot> 
    <h1 class="mt-5">Risultati per : <span class="text-danger"> {{$searchKey}}</span></h1>
    <div class="container" >
         <div class="row"> 
            @forelse ($products as $product)
             <div class="col-12 col-md-3"> 
                <x-product.card :product="$product" /> 
            </div> 
            @empty 
            <div class="alert alert-info" role="alert"> 
                <p class="lead">Nessun risultato trovato per la chiave di ricerca: {{ $searchKey }}</p> 
            </div> 
            @endforelse 
        </div> 
    </div> 

</x-layout>