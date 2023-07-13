<x-layout>

<h1>{{$product_to_check ? 'Annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}</h1>
@if ($product_to_check)
<div>PER VOI FRONT-END</div>
<h5>titolo:{{$product_to_check->title}}</h5>
<h5>titolo:{{$product_to_check->description}}</h5>
<h5>titolo:{{$product_to_check->price}}</h5>
<h5>titolo:{{$product_to_check->created_at->format('d/m/y')}}</h5>
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
            <button type="submit" class="btn btn-success shadow">Rifiuta</button>
        </form>
    </div>
</div>
@endif




</x-layout>