<x-layout>
    

   <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                <h3>Dettaglio prodotto: <br>
                  {{$product->title}} </h3>
                <p>{{$product->description}}</p>
                <p>Prezzo: € {{$product->price}}</p>
                <p class="lead fs-6">Categoria: {{$product->category->name}}</p>
                <p>Pubblicato il: {{$product->created_at->format('d/m/y')}}</p>


            </div>
            
            <div class="col-12 col-md-6 mt-5"> 
                <div class="container-gallery">
	
                    <div class="feature">
                        <figure class="featured-item image-holder r-3-2 transition"></figure>
                    </div>
                    
                    <div class="gallery-wrapper">
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
