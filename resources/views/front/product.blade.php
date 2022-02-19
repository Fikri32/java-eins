@extends('layouts.master')
@section('content')
<section id='faq' class="s-faq">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="jumbo-text text-center text-white">Our Briquette</h1>

        </div>
    </div>
    <div class="row-template faq-desc has-bottom-sep" data-aos="fade-up" style="margin-top:7rem; margin-bottom:150px;">
        <div id="related-products-slider-container" class="owl-container col">
            <div class=" owl-carousel owl-theme card-group">
                @foreach ($catalogues as $d)
                <div class="shadow-lg card bg-white h-100 related_products_card border-0 mt-5 mb-5"
                    style="border-radius: 1rem;">
                    <div class="card-header bg-white border-bottom-0">
                        @if(count($d->catalogue_images) > 0)
                        <img src="{{ asset('catalogue_images/'.$d->catalogue_images[0]['image']) }}" alt=""
                            height="60px" width="60px">
                        @endif
                        <span class="suzohapp-dark-grey font-weight-ligther">{{$d->name}}</span>
                    </div>
                    <div class="card-body card-body align-items-center justify-content-center px-3">
                        <p
                            style="font-family: montserrat-light sans-serif; font-size:60%; margin-top:2.5rem; margin-bottom:0rem; text-transform:none;">
                            This Product is so fuckin awesome. You really need to buy it at least once before you die!
                        </p>
                        <h6 class="card-title text-uppercase mb-5 font-weight-light"
                            style="font-family: montserrat-regular, sans-serif; margin-top:1rem;">Min. Order:
                            {{$d->moq}}
                        </h6>
                        <a href="{{route('produk.detail',$d->id)}}" class="btn btn-lg btn-outline-danger">
                            Detail Product
                        </a>

                    </div>
                </div>
                @endforeach
            </div>


            <div class="owl-theme">
                <div class="owl-controls d-block">
                    <div class="custom-nav owl-nav"></div>
                </div>
            </div>
        </div>
    </div>





</section> <!-- end s-faq -->
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
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
        loop: true,
        margin: 50,
        nav: true,
        navText: ["<i class='fa fa-chevron-circle-left' style='color:#c4c4c4;'></i>", "<i class='fa fa-chevron-circle-right' style='color:#c4c4c4;'></i>"],
        navContainer: '.owl-container .custom-nav',
        navClass: ["owl-prev", "owl-next"],
        items: 3,
        autoWidth: false,
        center: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0
            },
            768: {
                items: 1,
                stagePadding: 0
            },
            992: {
                items: 2,
                stagePadding: 60
            },
            1200: {
                items: 3
            }
        }
    })
</script>
@endpush