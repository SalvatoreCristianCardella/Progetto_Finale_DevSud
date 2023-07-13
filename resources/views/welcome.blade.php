<x-layout>

    <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex flex-column">
       
        <h1  data-aos="zoom-out"  data-aos-duration="800" class="mb-3">Presto.it</h1>
        <h3  data-aos="zoom-out"  data-aos-duration="3000">Compra o Vendi tutto ciò che vuoi...</h3>
        </div>
        
        <!--Waves Container-->
        <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="#3c6e71" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="#d9d9d9" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#284b63" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="#ffffff" />
        </g>
        </svg>
        </div>
        <!--Waves end-->
        
        </div>
        <!--Header ends-->
        
      

    <div class="container">
        <h2 class="text-center">I nuovi annunci:</h2>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-12 col-md-3 marginCustom">
                <x-product.card
                :product="$product"
                />
            </div>
                
            @endforeach
        </div>
    </div>

<p>frase di test</p>
    
</x-layout>