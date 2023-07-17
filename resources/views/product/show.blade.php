<x-layout>
    

   <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                <h3>Dettaglio prodotto: <br>
                  {{$product->title}} </h3>
                <p class="text-break text-white">{{$product->description}}</p>
                <p class="text-white">Prezzo: € {{$product->price}}</p>
                <p class="lead fs-6 text-white">Categoria: {{$product->category->name}}</p>
                <p class="text-white">Pubblicato il: {{$product->created_at->format('d/m/y')}}</p>


            </div>
            
            <div class="col-12 col-md-6 mt-5"> 
                <div class="container-gallery">
	
                    <div class="feature">
                        <figure class="featured-item image-holder r-3-2 transition"></figure>
                    </div>
                    
                    <div class="gallery-wrapper">
                        {{-- questo serve per vedere le foto:
                        @if ($product->images)
                <div class="carousel-inner">
                    @foreach ($product->images as $image)
                    <div class="carousel-item @if ($loop->first)active @endif">
                    <img src="{{Storage::url($image->path)}}" class="img-fluid p-3 rounded" alt="">
                </div>      
                    @endforeach
                </div>
                    @else
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/id/27/1200/400" class="img-fluid p-3 rounded" alt="">
                        </div>
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/id/27/1200/400" class="img-fluid p-3 rounded" alt="">
                        </div>
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/id/27/1200/400" class="img-fluid p-3 rounded" alt="">
                        </div>
                    </div>
                @endif  --}}
                        <div class="gallery">
                                <div class="item-wrapper">
                                    <figure class="gallery-item image-holder r-3-2 active transition"></figure>
                                </div>
                                <div class="item-wrapper">
                                    <figure class="gallery-item image-holder r-3-2 transition"></figure>
                                </div>
                                <div class="item-wrapper">
                                    <figure class="gallery-item image-holder r-3-2 transition"></figure>
                                </div>
                                <div class="item-wrapper">
                                    <figure class="gallery-item image-holder r-3-2 transition"></figure>
                                </div>
                                <div class="item-wrapper">
                                    <figure class="gallery-item image-holder r-3-2"></figure>
                                </div>
                                <div class="item-wrapper">
                                    <figure class="gallery-item image-holder r-3-2 transition"></figure>
                                </div>
                                <div class="item-wrapper">
                                    <figure class="gallery-item image-holder r-3-2 transition"></figure>
                                </div>
                                <div class="item-wrapper">
                                    <figure class="gallery-item image-holder r-3-2 transition"></figure>
                                </div>
                                <div class="item-wrapper">
                                    <figure class="gallery-item image-holder r-3-2 transition"></figure>
                                </div>
                                <div class="item-wrapper">
                                    <figure class="gallery-item image-holder r-3-2 transition"></figure>
                                </div>
                        </div>
                    </div>
                    
                    <div class="controls d-flex">
                        <button class="move-btn left">&larr;</button>
                        <button class="move-btn right">&rarr;</button>
                    </div>
                    
                </div>
                
            </div>

        </div>

   </div>

    

</x-layout>
