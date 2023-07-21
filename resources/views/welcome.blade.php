<x-layout>

    <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex">

           
            @if (Auth::user() != null)

                {{-- <div class="flex">
                    <a href="{{route('product.index')}}"><p class="circle1" data-aos="flip-right" data-aos-delay="100"><i class="fa-solid fa-user fa-2xl mt-5" style="color: #ffffff;"></i></p></a>
                    <a href="{{route('product.create')}}"><p class="circle2" data-aos="flip-right" data-aos-delay="200"><i class="fa-solid fa-bag-shopping fa-2xl mt-5"></i></p></a>
                    <a href="{{ route('home')}}"><p class="circle3" data-aos="flip-right" data-aos-delay="300"><i class="fa-solid fa-magnifying-glass fa-2xl mt-5" style="color: #ffffff;"></i></p></a>
                </div> --}}
                
                
                <div class="d-flex flex-column">
                    <h1 data-aos="zoom-out"  data-aos-duration="800" class="mb-3">Presto.it</h1>
                    <h3 data-aos="zoom-out"  data-aos-duration="3000">{{__('ui.pHeader')}}</h3>
                </div>
                    
            @auth  
            
            @endauth  
            @else
            <div class="container">
            
                <div class="row align-items-center">
                    <div class="col-12 col-md-5 d-flex flex-column">
                        <h1  data-aos="zoom-out"  data-aos-duration="800" class="mb-3">Presto.it</h1>
                        <h4  data-aos="zoom-out"  data-aos-duration="3000">{{__('ui.pHeader')}}</h4>
                    </div>

                    <div class="col-12 col-md-7">
                        <p class="fs-2 text-white " data-aos="fade-left" >{{__('ui.pHeader2')}}</p>
                        <p class=" fs-3 text-white fw-bold" data-aos="fade-right" >{{__('ui.pHeader3')}}
                        <p class=" fs-5 text-white" data-aos="fade-left">{{__('ui.pHeader4')}} <span class="fs-2 fw-bold">Presto.it</span></p> 
                        <p class=" fs-3 fw-bold text-white " data-aos="fade-right"> {{__('ui.pHeader5')}}</p>  

                        <p class="text-white mt-5 fs-5" data-aos="zoom-out-down"><a data-bs-toggle="offcanvas" data-bs-target="#registrati" role="button" id="btn-open-register" class="d-inline text-decoration-none btn-revisor-footer rounded">{{__('ui.btn-register')}}</a>
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
                                <h3 class="info-h3">{{__('ui.ship1')}}</h3>
                                <p>{{__('ui.ship2')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-12 col-md-4 d-flex justify-content-center">
                        <div class="list-box d-flex align-items-center">
                            <div class="list-icon">
                                <i class="fa-solid fa-phone-volume fa-shake fa-2xl fs-1 me-2" style="color: #284b63;"></i>
                            </div>
                            <div class="">
                                <h3 class="info-h3">{{__('ui.ship3')}}</h3>
                                <p>{{__('ui.ship4')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-12 col-md-4 d-flex justify-content-center">
                        <div class="list-box d-flex justify-content-start align-items-center">
                            <div class="list-icon">
                                <i class="fa-solid fa-rotate fa-spin fa-2xl fs-1 me-2" style="color: #284b63;"></i>
                            </div>
                            <div class="">
                                <h3 class="info-h3">{{__('ui.ship5')}}</h3>
                                <p>{{__('ui.ship6')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    

{{-- Sezione i nuovi annunci --}}

    <div class="container height-custom">
        <div class="row justify-content-evenly">
            <h2 class="text-center">{{__('ui.newAnnounce')}}</h2>
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
                <p class="text-white fw-bold fs-5">{{__('ui.aboutUs')}}</p>
            </div>
        </div>

    </div>
    
</x-layout>