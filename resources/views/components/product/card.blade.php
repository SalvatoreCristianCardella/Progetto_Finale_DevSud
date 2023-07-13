{{-- <div class="card" style="width: 18rem;">
    <img src="https://www.casalascaservizi.com/wp-content/themes/aaika/assets/images/default.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$product->title}}</h5>
      <p class="card-text">{{$product->description}}</p>
      <p class>Prezzo: € {{$product->price}}</p>
      

      <p class="card-footer fs-6">Pubblicato il: {{$product->created_at->format('d/m/y')}}</p>
      <a href="{{route ('category.show',$product->category)}}" class= "button-80">{{$product->category->name}}</a>

      <a href="{{route('product.show', compact('product'))}}" class="button-80">DETTAGLI</a>



    </div>
  </div> --}}


  
    
    <div class="task">
      <div class="abstract">
        <h4>{{$product->title}}</h4>
        <img src="https://www.casalascaservizi.com/wp-content/themes/aaika/assets/images/default.png" class="card-img-top" alt="...">
        <p class="card-text">{{$product->description}}</p>
        <p>Prezzo: € {{$product->price}}</p>
      </div>
      <div class="details">
        <div class="details__inner">
          <p class="card-footer fs-6">Pubblicato il: {{$product->created_at->format('d/m/y')}}</p>
          <a href="{{route ('category.show',$product->category)}}" class= "button-80">{{$product->category->name}}</a>
          <a href="{{route('product.show', compact('product'))}}" class="button-80">DETTAGLI</a>

        </div>
      </div>
    </div>
