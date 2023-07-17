<x-layout>

    <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex">

           
            @if (Auth::user() != null)

                <div class="d-flex flex-column">
        
                    <h1  data-aos="zoom-out"  data-aos-duration="800" class="mb-3">Presto.it</h1>
                    <h3  data-aos="zoom-out"  data-aos-duration="3000">Compra o Vendi tutto ciò che vuoi...</h3>
                </div>
            @auth  
            
            @endauth  
            @else
            <div class="container">
            
                <div class="row align-items-center">
                    <div class="col-12 col-md-5 d-flex flex-column">
                        <h1  data-aos="zoom-out"  data-aos-duration="800" class="mb-3">Presto.it</h1>
                        <h4  data-aos="zoom-out"  data-aos-duration="3000">Compra o Vendi tutto ciò che vuoi...</h4>
                    </div>

                    <div class="col-12 col-md-7">
                        <p class="fs-2 text-white " data-aos="fade-left" >Vuoi vendere qualcosa che non usi più?</p>
                        <p class=" fs-3 text-white fw-bold" data-aos="fade-right" >Crea un profilo, carica e vendi ciò che vuoi... 
                        <p class=" fs-5 text-white" data-aos="fade-left">Più di un milione di persone hanno scelto <span class="fs-2 fw-bold">Presto.it</span></p> 
                        <p class=" fs-3 fw-bold text-white " data-aos="fade-right"> REGISTRATI e carica il tuo primo annuncio.</p>  

                        <p class="text-white mt-5 fs-5" data-aos="zoom-out-down"><a data-bs-toggle="offcanvas" data-bs-target="#registrati" role="button" id="btn-open-register" class="d-inline text-decoration-none btn-revisor-footer rounded">Registrati</a>
                    </div>
            
                
                </div>
            </div>


            @endif
            

        
            
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
            <use xlink:href="#gentle-wave" x="48" y="3" fill="#ffffff" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#284b63" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="#d9d9d9" />
        </g>
        </svg>
        </div>
        <!--Waves end-->
        
        </div>
        <!--Header ends-->
        
      {{-- Sezione info --}}
       
            <div class="container-fluid info-section d-flex align-items-center justify-content-evenly">
    
                <div class="row justify-content-evenly w-100">
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                        <div class="list-box d-flex align-items-center">
                            <div class="list-icon ">
                                <i data-aos="fade-right" class="fa-solid fa-truck-fast fa-2xl fs-1 me-2" style="color: #284b63;"></i>
                            </div>
                            <div class="">
                                <h3 class="info-h3">Spedizione gratuita</h3>
                                <p>Per ordini superiori a €50</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-12 col-md-4 d-flex justify-content-center">
                        <div class="list-box d-flex align-items-center">
                            <div class="list-icon">
                                <i class="fa-solid fa-phone-volume fa-shake fa-2xl fs-1 me-2" style="color: #284b63;"></i>
                            </div>
                            <div class="">
                                <h3 class="info-h3">Supporto 24/7</h3>
                                <p>Sarai supportato tutti i giorni</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-12 col-md-4 d-flex justify-content-center">
                        <div class="list-box d-flex justify-content-start align-items-center">
                            <div class="list-icon">
                                <i class="fa-solid fa-rotate fa-spin fa-2xl fs-1 me-2" style="color: #284b63;"></i>
                            </div>
                            <div class="">
                                <h3 class="info-h3">Resi</h3>
                                <p>Reso gratuito entro 3 giorni</p>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    

{{-- Sezione i nuovi annunci --}}

    <div class="container height-custom">
        <div class="row justify-content-evenly">
            <h2 class="text-center">I nuovi annunci:</h2>
            @foreach ($products as $product)
            <div class="col-10 col-md-4 d-flex justify-content-around">
                <x-product.card
                :product="$product"
                />
            </div>
                
            @endforeach
        </div>
    </div> 

    {{-- Sezione chi siamo --}}

    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="row about-us">
            <div class="col-10 col-md-6 p-0 d-flex justify-content-center align-items-center">
                <img src="/img/aboutus.png" class="img-about-us" alt="" data-aos="fade-right" data-aos-duration="3000">
            </div>
            <div class="col-10 col-md-4 p-0 d-flex flex-column justify-content-center align-items-start">
                <h1 class="fw-bolder" data-aos="fade-left" data-aos-duration="3000">We are<div class="d-inline btn-about-us rounded">PRESTO.IT</div></h1>
                <p class="text-white fw-bold fs-5">Presto.it è la più grande e famosa piattaforma di compravendita online italiana, vitale e dinamica.
                Su Presto.it è possibile trovare oggetti delle migliori marche italiane ed internazionali, a prezzi vantaggiosi.
                Siamo rivenditori di tutti i brand presenti nel nostro catalogo e garantiamo la qualità e la serietà del servizio.</p>
            </div>
        </div>

    </div>
    
</x-layout>