<x-layout>

    <div class="vh-100">
        <h1>mastehead</h1>
    </div>

    <div class="container">
        <h2 class="text-center">I nuovi annunci:</h2>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-12 col-md-3 marginCustom">
                <x-product.card
                :product="$product"
                />
            </div>
                
            @endforeach
        </div>
    </div>


    
</x-layout>