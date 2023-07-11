<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-12 col-md-3">
                <x-product.card
                :product="$product"
                />
            </div>
                
            @endforeach
        </div>
    </div>


</x-layout>