<div class="card" style="width: 18rem;">
    <img src="http://picsum.photos/200" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$product->title}}</h5>
      <p class="card-text">{{$product->description}}</p>
      <p>{{$product->price}}</p>
      <a href="{{route('product.show', compact('product'))}}" class="btn btn-primary">dettagli</a>
      <a href="" class="btn btn-primary">categoria: {{$product->category->name}}</a>
      <p class="card-footer">pubblicato il {{$product->created_at->format('d/m/y')}}</p>
    </div>
  </div>