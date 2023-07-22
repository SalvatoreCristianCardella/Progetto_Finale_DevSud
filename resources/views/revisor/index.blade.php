<x-layout>
    
        <div class="text-center h-100 pt-5">
            @if (!$product_to_check)
            
            <div style="height: 700px" class="d-flex justify-content-center align-items-center flex-column">
                <h2 class="">{{$product_to_check ? 'Annuncio da revisionare' : 'Non ci sono annunci da revisionare'}} 
                    
                    <p class="text-white fs-5">Tieni d'occhio la notifica nella barra in alto per scoprire se ci sono nuovi annunci!</p> 
                    <i class="fa-regular fa-hand-point-up fa-bounce fa-2xl my-5"></i>

                </h2>
            </div>
            @endif
            @if ($product_to_check)

            <h6><p class="text-white fst-italic d-inline fw-bolder fs-5">Titolo: </p>{{$product_to_check->title}}</h6>
            <h6><p class="text-white fst-italic d-inline fw-bolder fs-5">Descrizione: </p>{{$product_to_check->description}}</h6>
            <h6><p class="text-white fst-italic d-inline fw-bolder fs-5">Prezzo: </p>
                € {{$product_to_check->price}}</h6>
                <h6><p class="text-white fst-italic d-inline fw-bolder fs-5">Pubblicato il: </p>{{$product_to_check->created_at->format('d/m/y')}}</h6>
            
        </div>
    
        
        <div class="container">
            <div class="row mt-3 justify-content-center w-100">
                <div class="col-12 col-md-10">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade">
                        <div class="carousel-inner">  
                            @if ($product_to_check->images->isEmpty())
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center container">
                            
                                    <img src="/img/default.png" alt="immagine default" style="width: 50%">

                                </div>
                            </div>
                            
                            @else
                            
                            @foreach($product_to_check->images as $image)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <div class="d-flex justify-content-center container">
                                    <div class="d-flex flex-column mx-4">
                                    <h5 class="tc-accent mt-3">Tags</h5>
                                        <div class="pt-2">
                                            @if ($image->labels)
                                            @foreach ($image->labels as $label)
                                            <p class=" text-white btn-revisor-footer rounded">{{$label}}</p>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                        <img src="{{ $image->getUrl(400, 300) }}" class=" d-block rounded-4" style="width: 50%" alt="...">

                                    <div class="ms-5" style="width: 130px" >
                                        <h5 class="tc-accent">Revisione Immagine</h5>
                                        <p  class="text-white btn-revisor-footer rounded">Adulti: <span class="{{$image->adult}}"></span></p>
                                        <p class="text-white btn-revisor-footer rounded">Satira: <span class="{{$image->spoof}}"></span></p>
                                        <p class="text-white btn-revisor-footer rounded">Medicina: <span class="{{$image->medical}}"></span></p>
                                        <p class="text-white btn-revisor-footer rounded">Violenza: <span class="{{$image->violence}}"></span></p>
                                        <p class="text-white btn-revisor-footer rounded">Contenuto Ammiccante: <span class="{{$image->racy}}"></span></p>
                                    </div>
                                </div>
                              
                               </div>
                            </div>
                            @endforeach
                            @endif
                        </div>

                        <div class="row flex mt-2 justify-content-center mt-5 mb-5">
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
    </div>
    
       @endif
        
        
    </x-layout>


    