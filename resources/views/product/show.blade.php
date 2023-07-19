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

                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($product->images as $image)
                      <div class="carousel-item active">
                        <img src="{{ $image->getUrl(400, 300) }}" class="d-block w-100" alt="...">
                      </div>
                      @endforeach
                    
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                
                        
                {{-- @foreach ($product->images as $image)
                <section id="gallery">
                    <div class="container">
                      <div id="image-gallery">
                        <div class="row">
                            
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image @if ($loop->first)active @endif">
                                <div class="img-wrapper">
                                    <a href="{{Storage::url($image->path)}}"><img src="{{Storage::url($image->path)}}" class="img-responsive"></a>
                                    <div class="img-overlay">
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>      
                        </div><!-- End row -->
                      </div><!-- End image gallery -->
                    </div><!-- End container --> 
                    </section> --}}
                    {{-- @endforeach --}}
                    

                        {{-- @foreach ($product->images as $image) --}}
                        
                        

                      {{-- @endforeach --}}
                    
                
            </div>
        </div>
   </div>

   

</x-layout>
