<x-layout>

    <div class="container">
        <div class="row justify-content-between">
            <h2 class="marginCustom">{{__('ui.indexTitle')}}</h2>
            @foreach ($products as $product)
            <div class="col-10 col-md-4 d-flex justify-content-around">
                <x-product.card
                :product="$product"
                />
            </div>
                
            @endforeach
            {{$products->links()}}
        </div>
    </div>


</x-layout>