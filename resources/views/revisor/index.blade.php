<x-layout>

<h1>{{$product_to_check ? 'Annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}</h1>
@if ($product_to_check)
<h5>Titolo:{{$product_to_check->title}}</h5>
<h5>Descrizione:{{$product_to_check->description}}</h5>
<h5>Prezzo:{{$product_to_check->price}}</h5>
<h5>Creato il:{{$product_to_check->created_at->format('d/m/y')}}</h5>
@if ($product_to_check)
<div class="container">
    <div class="row">
        <div class="col-12">
            <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                @if ($product_to_check->images)
                <div class="carousel-inner">
                    @foreach ($product_to_check->images as $image)
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
                @endif
            </div>
        </div>
    </div>
</div>
    
@endif
<div class="row">
    <div class="col-12 col-md-6">
    <form action="{{route('revisor.accept',['product'=>$product_to_check])}}" method="POST">
        @csrf
        @method('PATCH')
        <button type="submit" class="btn btn-success shadow">Accetta</button>
    </form>
    </div>
    <div class="col-12 col-md-6 text-end">
        <form action="{{route('revisor.reject',['product'=>$product_to_check])}}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-warning shadow">Rifiuta</button>
        </form>
    </div>
</div>
@endif




</x-layout>