<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-evenly">
            @foreach ($products as $product)
            <div class="col-12 col-md-3 marginCustom">
                <x-product.card
                :product="$product"
                />
            </div>
                
            @endforeach
            {{$products->links()}}
        </div>
    </div>


</x-layout>