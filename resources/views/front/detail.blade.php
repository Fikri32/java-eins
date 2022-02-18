@extends('layouts.master')
@section('content')
<section id='faq' class="s-faq">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="jumbo-text text-center text-white">Detail Product</h1>

        </div>
    </div>
    <div class="container-fluid mt-5 mb-3">
        <div class="row no-gutters">
            <div class="col-md-5 pr-2">
                <div class="card-detail shadow-lg mb-4" style="border-radius: 1.5rem;">
                    <div class="demo-detail">
                        <ul class="ul-detail" id="lightSlider">
                            <li class="li-detail" data-thumb="{{asset('assets_front/images/dummy2.jpg')}}"> <img class="img-detail" src="{{asset('assets_front/images/dummy2.jpg')}}" /> </li>
                            <li class="li-detail" data-thumb="{{asset('assets_front/images/dummy1.jpg')}}"> <img class="img-detail" src="{{asset('assets_front/images/dummy1.jpg')}}" /> </li>
                            <li class="li-detail" data-thumb="{{asset('assets_front/images/j-5.jpg')}}"> <img class="img-detail" src="{{asset('assets_front/images/j-5.jpg')}}" /> </li>
                            <li class="li-detail" data-thumb="{{asset('assets_front/images/j-2.webp')}}"> <img class="img-detail" src="{{asset('assets_front/images/j-2.webp')}}" /> </li>
                            <!-- <li class="li-detail" data-thumb="{{asset('assets_front/images/briquette3.jpg')}}"> <img class="img-detail" src="{{asset('assets_front/images/briquette3.jpg')}}" /> </li>
                            <li class="li-detail" data-thumb="{{asset('assets_front/images/briquette3.jpg')}}"> <img class="img-detail" src="{{asset('assets_front/images/briquette3.jpg')}}" /> </li>
                            <li class="li-detail" data-thumb="{{asset('assets_front/images/briquette3.jpg')}}"> <img class="img-detail" src="{{asset('assets_front/images/briquette3.jpg')}}" /> </li>
                            <li class="li-detail" data-thumb="{{asset('assets_front/images/briquette3.jpg')}}"> <img class="img-detail" src="{{asset('assets_front/images/briquette3.jpg')}}" /> </li>
                            <li class="li-detail" data-thumb="{{asset('assets_front/images/briquette3.jpg')}}"> <img class="img-detail" src="{{asset('assets_front/images/briquette3.jpg')}}" /> </li>
                            <li class="li-detail" data-thumb="{{asset('assets_front/images/briquette3.jpg')}}"> <img class="img-detail" src="{{asset('assets_front/images/briquette3.jpg')}}" /> </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card-detail " style="border-radius: 1.5rem;">
                    <div class="about">
                        <h2 class="font-weight-bold" style="margin-top: 0; margin-bottom:1rem;">PRODUCT'S NAME</h2>
                        <h4 style="margin-top: 0rem;">Specification:</h4>
                    </div>
                    <div class="mt-5">
                        <ul class="nav nav-tabs ml-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Premium</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Original</a>
                            </li>
                        </ul>
                    </div>
                    <div class="product-description">
                        <div class="mt-4 mb-5"> <span class="font-weight-bold">Description</span>
                            <p class="mt-3 mb-1" style="font-family: montserrat-light, sans-serif; color:#242424">
                                Mixed coconut charcoal Java & Sulawesi briquette for shisha cube shape (shape according to request) <br>
                                Middle east & Asia standart : Saudi Arabia, Dubai, Egypt, South Africa
                            </p>
                            <br>
                            <div class="bullets" style="color:#242424">
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Calorie Value : 7000 Kcal</span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Total Mousture : 7%</span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Ash content : ± 2,3 - 2,5%</span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Fixed carbon : 80%</span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Burning Time : 2 Hour</span> </div>

                                <div class="mt-3 mb-3   "></div>

                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">White Ash</span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Size 25mm &#10799; 25mm &#10799; 25mm </span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">MSDS Certificate </span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text text-uppercase">10 kg packaging carton include inner box </span> </div>
                            </div>
                            <br>
                            <div class="flex center" style="text-align: center;">
                                <a href="{{route('contact.index')}}">
                                    <button id="btn_vision" type="button" class="btn-template btn-primary btn-lg btn-block" style="background-color:black; color:blanchedalmond; border:none;">Contact Us</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section> <!-- end s-faq -->
@endsection
@push('scripts')
<script>
    // function fotoOnclick(el){
    //     var fotoProdukMain = $("#foto-produk-main");
    //     var fotoProdukNav = document.getElementById('foto-produk-nav');

    //     let src = $(el).attr("src")
    //     fotoProdukMain.attr("src", src)
    // }

    // function imgOnclick(el){
    //     var modal = document.getElementById("myModal");
    //     var img = $("#foto-produk-main");
    //     var modalImg = document.getElementById("mainImg");
    //     var captionText = document.getElementById("caption");
    //     var span = document.getElementsByClassName("close-img")[0];

    //     modal.style.display = "block";
    //     modalImg.src = $(el).attr("src");
    //     // captionText.innerHTML = this.alt;

    //     span.onclick = function() { 
    //         modal.style.display = "none";
    //     }
    // }

    // function _createImageNav(path) {
    //     return `
    //         <div class="co-4">
    //             <img src="${path}" class="slider-nav__item h-100" alt="navigasi foto" onclick="fotoOnclick(this)"/>
    //         </div>
    //     `
    // }
    $('#lightSlider').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 9
    });
</script>
@endpush