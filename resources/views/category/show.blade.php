<x-layout>
    
    <div class="container">
        <div class="row justify-content-evenly">
            <h2 class="mt-5 text-center">{{__('ui.showcategory1')}}{{$category->name}}</h2>

            @forelse ($productscategory as $product)
            <div class="col-12 col-md-4">
                <x-product.card
                :product="$product"/> 
            </div> 

            @empty
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7 d-flex flex-column align-items-center justify-content-center ">
                        <h3>{{__('ui.showcategory2')}} 
                            <h2 class="fw-bolder text-grey">{{$category->name}}</h2>
                            <p class="text-white fw-bold">{{__('ui.showcategory3')}}</p> 
                            @if (Auth::user() != null)
                            @auth  
                            <a href="{{route('product.create')}}" class="text-decoration-none "><button class="button-86 mt-3" role="button">{{__('ui.showcategory4')}}</button></a>
                            @endauth  
                            @else
                            <p class="text-white"><a data-bs-toggle="offcanvas" data-bs-target="#registrati" role="button" id="btn-open-register" class="d-inline text-decoration-none btn-revisor-footer rounded">{{__('ui.showcategory5')}}</a> {{__('ui.showcategory6')}} 
                                <a data-bs-toggle="offcanvas" data-bs-target="#login" role="button" id="btn-open-login" class="d-inline text-decoration-none btn-revisor-footer rounded">Login</a>
                            </h2>
                        </p>
                        @endif
                    </div>
                    <div class="col-12 col-md-5 d-flex flex-column align-items-start justify-content-center">
                        <img src="/img/pc-header.png" style="max-width: 370px" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    @endforelse
    {{$productscategory->links()}}

    
</div>
</div>


</x-layout>