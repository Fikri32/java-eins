@extends('layouts.master')
@section('content')
<section id='faq' class="s-faq">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="jumbo-text text-center text-white">Detail Product</h1>

        </div>
    </div>
    <div class="row-template has-bottom-sep" data-aos="fade-up" style="margin-top: 6rem">

        <div class="col-lg-2 order-lg-1 order-2">
            <ul class="image_list">
                <li data-image="https://indonesiacocopeat.com/wp-content/uploads/2021/09/briquette-resize.jpg"><img src="https://indonesiacocopeat.com/wp-content/uploads/2021/09/briquette-resize.jpg" alt=""></li>
                <li data-image="{{asset('assets_front/images/j-9.jpg')}}"><img src="{{asset('assets_front/images/j-8.jpg')}}" alt=""></li>
                <li data-image="{{asset('assets_front/images/j-5.jpg')}}"><img src="{{asset('assets_front/images/j-5.jpg')}}" alt=""></li>
            </ul>
        </div>
        <div class="col-lg-4 order-lg-2 order-1">
            <div class="image_selected">
                <img src="{{asset('assets_front/images/j-5.jpg')}}" alt="">
            </div>
        </div>


        <div class="col-md-6 pl-5">
            <h3 style="margin-top: 1rem">PRODUCT'S NAME</h3>
            <h5 style="margin-top: 1rem">SPESIFIKASI:</h5>
            <ul class="text-justify" style="list-style-type: none; margin-left:0px; font-family: montserrat-light sans-serif;">
                <li class="text-uppercase">Mixed coconut charcoal Java & Sulawesi briquette for shisha cube shape (shape according to request)</li>
                <li class="text-uppercase" style="margin-top: 1rem;">Middle east & Asia standart : Saudi Arabia, Dubai, Egypt, South Africa </li>
                <li style="margin-top: 1rem;">-Calorie Value : 7000 Kcal </li>
                <li>-Total Mousture : 7% </li>
                <li>-Ash content : ± 2,3 - 2,5% </li>
                <li>-Fixed carbon : 80% </li>
                <li>-Burning Time : 2 Hour</li>
                <li class="text-uppercase" style="margin-top: 1rem;">White Ash </li>
                <li style="margin-top: 1rem;">Size 25mm x 25mm x 25mm </li>
                <li class="text-uppercase" style="margin-top: 1rem;">MSDS Certificate </li>
                <li class="text-uppercase" style="margin-top: 1rem;">10 kg packaging carton include inner box</li>
                <!-- <li style="margin-top: 1rem;"><b>see more</b></li> -->
                <li style="margin-top: 1rem;"><b>see less</b></li>
            </ul>

            <a href="{{route('contact.index')}}">
                <button type="button" class="btn-template btn-primary btn-sm btn-block border-0" style="background-color: black; color: #c4c4c4; border:none; border-radius:0px; margin-top:1rem">Contact Us</button>
            </a>
        </div>
    </div>
    <!-- end section-header -->

    <div class="row-template faq-desc" data-aos="fade-up">

    </div>
    </div> <!-- end faq-desc -->



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
</script>
@endpush