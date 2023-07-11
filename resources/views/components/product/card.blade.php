<div class="card" style="width: 18rem;">
    <img src="https://www.casalascaservizi.com/wp-content/themes/aaika/assets/images/default.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$product->title}}</h5>
      <p class="card-text">{{$product->description}}</p>
      <p class>Prezzo: € {{$product->price}}</p>
      

      <p class="lead fs-6">Categoria: {{$product->category->name}}</p>
      <p class="card-footer fs-6">Pubblicato il: {{$product->created_at->format('d/m/y')}}</p>

      <a href="{{route('product.show', compact('product'))}}" class="button-80">DETTAGLI</a>


    </div>
  </div>