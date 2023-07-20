<x-layout>
    
    <div class="text-center">    
        <h2>{{$product_to_check ? 'Annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}</h2>
        @if ($product_to_check)
        <h6><p class="text-white fst-italic d-inline fw-bolder fs-5">Titolo: </p>{{$product_to_check->title}}</h6>
        <h6><p class="text-white fst-italic d-inline fw-bolder fs-5">Descrizione: </p>{{$product_to_check->description}}</h6>
        <h6><p class="text-white fst-italic d-inline fw-bolder fs-5">Prezzo: </p>
            € {{$product_to_check->price}}</h6>
            <h6><p class="text-white fst-italic d-inline fw-bolder fs-5">Pubblicato il: </p>{{$product_to_check->created_at->format('d/m/y')}}</h6>
        </div>
        
        <div class="container">
            <div class="row justify-content-center mt-3 h-75">
                <div class="col-12 col-md-5">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                            
                            @if ($product_to_check->images->isEmpty())
                            
                            <div class="carousel-item active">
                                <img src="/img/default.png" class="d-block w-100 rounded" alt="...">
                            </div>
                            
                            @else
                            
                            @foreach($product_to_check->images as $image)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <img src="{{ $image->getUrl(400, 300) }}" class="d-block w-100 rounded" alt="...">
                                <div>
                                    <h5 class="tc-accent mt-3">Tags</h5>
                                    <div class="pt-2">
                                        @if ($image->labels)
                                        @foreach ($image->labels as $label)
                                        <p class="d-inline">{{$label}}</p>
                                        @endforeach
                                        @endif
                                    </div>
                               
                                    <div class="card-body">
                                        <h5 class="tc-accent">Revisione Immagine</h5>
                                        <p>Adulti: <span class="{{$image->adult}}"></span></p>
                                        <p>Satira: <span class="{{$image->spoof}}"></span></p>
                                        <p>Medicina: <span class="{{$image->medical}}"></span></p>
                                        <p>Violenza: <span class="{{$image->violence}}"></span></p>
                                        <p>Contenuto Ammiccante: <span class="{{$image->racy}}"></span></p>
                                    </div>
                                </div>
                              
                               </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        
                        
                                   
                    
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        
        
        <div class="row flex my-5  justify-content-center">
            <div class="col-12 col-md-2">
                <form action="{{route('revisor.accept',['product'=>$product_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow mb-2">Accetta</button>
                </form>
            </div>
            <div class="col-12 col-md-2">
                <form action="{{route('revisor.reject',['product'=>$product_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                </form>
            </div>
        </div>
       @endif
        
        
        
        
    </x-layout>