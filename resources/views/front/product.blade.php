@extends('layouts.master')
@section('content')
<section id='faq' class="s-faq">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="jumbo-text text-center text-white">Our Briquette</h1>

        </div>
    </div>
    <div class="row-template faq-desc has-bottom-sep" data-aos="fade-up" style="margin-top:150px">
        <div id="related-products-slider-container" class="owl-container col">
            <div class="owl-carousel owl-theme card-group">
                <div class="card bg-white border-suzohapp-light-grey h-100 related_products_card">
                    <div class="card-header bg-white border-bottom-0">
                        <img class="card-img box-image-cover" src="{{asset('assets_front/images/j-6.jpg')}}" />
                        <span class="suzohapp-dark-grey font-weight-ligther">Nama Produk</span>
                    </div>
                    <div class="card-body card-body align-items-center justify-content-center px-3">
                        <h6 class="card-title text-uppercase suzohapp-light-blue mb-2 font-weight-light">MOQ
                        </h6>
                        <a href="#" class="btn btn-lg btn-outline-primary">
                            Detail Product
                        </a>
                    </div>
                </div>
                <div class="card bg-white border-suzohapp-light-grey h-100 related_products_card">
                    <div class="card-header bg-white border-bottom-0">
                        <img class="card-img box-image-cover" src="{{asset('assets_front/images/j-6.jpg')}}" />
                        <span class="suzohapp-dark-grey font-weight-ligther">Nama Produk</span>
                    </div>
                    <div class="card-body card-body align-items-center justify-content-center px-3">
                        <h6 class="card-title text-uppercase suzohapp-light-blue mb-2 font-weight-light">MOQ
                        </h6>
                        <a href="#" class="btn btn-lg btn-outline-primary">
                            Detail Product
                        </a>
                    </div>
                </div>
                <div class="card bg-white border-suzohapp-light-grey h-100 related_products_card">
                    <div class="card-header bg-white border-bottom-0">
                        <img class="card-img box-image-cover" src="{{asset('assets_front/images/j-6.jpg')}}" />
                        <span class="suzohapp-dark-grey font-weight-ligther">Nama Produk</span>
                    </div>
                    <div class="card-body card-body align-items-center justify-content-center px-3">
                        <h6 class="card-title text-uppercase suzohapp-light-blue mb-2 font-weight-light">MOQ
                        </h6>
                        <a href="#" class="btn btn-lg btn-outline-primary">
                            Detail Product
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="owl-theme">
                <div class="owl-controls d-block">
                    <div class="custom-nav owl-nav"></div>
                </div>
            </div>
        </div>
    </div>
    </div>





</section> <!-- end s-faq -->
@endsection
@push('scripts')
<script>
    $(document).ready(function () {
        // $('.owl-carousel').owlCarousel({
        //     stagePadding: 80,
        //     loop:true,
        //     dots:false,
        //     margin:20,
        //     nav:true,
        //     autoplay:true,
        //     autoplayTimeout:1000,
        //     navText: ["<i class='fas fa-arrow-left'></i>","<i class='fas fa-arrow-right'></i>"],
        //     navContainer: '.owl-container .custom-nav',
        //     navClass: ["owl-prev rounded-circle","owl-next rounded-circle"],
        //     items:3,
        //     autoWidth:false,
        //     center:true,
        //     URLhashListener:true,
        //     autoplayHoverPause:true,
        //     startPosition: 'URLHash',
        //     responsive:{
        //         0:{
        //             items:1,
        //             stagePadding:0
        //         },
        //         768:{
        //             items:1,
        //             stagePadding:0
        //         },
        //         992:{
        //             items:2,
        //             stagePadding:60
        //         },
        //         1200:{
        //             items:3
        //         }
        //     }
        // })
    });
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:50,
        nav:true,
        navText: ["<i class='fa fa-arrow-left'></i>","<i class='fa fa-arrow-right'></i>"],
        navContainer: '.owl-container .custom-nav',
        navClass: ["owl-prev","owl-next"],
        items:3,
        autoWidth:false,
        center:true,
        responsive:{
            0:{
                items:1,
                stagePadding:0
            },
            768:{
                items:1,
                stagePadding:0
            },
            992:{
                items:2,
                stagePadding:60
            },
            1200:{
                items:3
            }
        }
    })
   
</script>
@endpush