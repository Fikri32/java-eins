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
                            @foreach ($images as $d)
                            <li class="li-detail" data-thumb="{{ asset('catalogue_images/'.$d->image) }}">
                                <a href="{{ asset('catalogue_images/'.$d->image) }}">
                                    <img class="img-detail" src="{{ asset('catalogue_images/'.$d->image) }}" />
                                </a>
                            </li>
                            @endforeach
                            @if ($vid == null)
                                
                            @else
                            <li class="li-detail" data-thumb="{{ asset('assets_front/images/thumb.png') }}"> 
                                <a class="video-link" href="{{ asset('catalogue_videos/'.$vid->video) }}">
                                    <video class="img-detail" autoplay muted loop playsinline>
                                        <source src="{{ asset('catalogue_videos/'.$vid->video) }}" type="video/mp4">
                                    </video> 
                                </a>
                            </li>
                            @endif
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card-detail " style="border-radius: 1.5rem;">
                    <div class="about">
                        <h2 class="font-weight-bold text-uppercase" style="margin-top: 0; margin-bottom:1rem;">{{$detail->name}}</h2>
                        <h4 style="margin-top: 0rem;">Specification:</h4>
                    </div>
                    <div class="mt-5">
                        <ul class="nav nav-tabs ml-0">
                            <li class="nav-item">
                                <a data-toggle="tab" class="nav-link active" href="#premium">Premium</a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="tab" class="nav-link" href="#original">Original</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="product-description tab-pane fade active show" id="premium">
                            <div class="mt-4 mb-5">
                                <span class="font-weight-bold">Description</span>
                                <div class="bullets" style="color:#242424">

                                    <div class="d-flex align-items-center">
                                        <span class="dot"></span>
                                        <span class="bullet-text description">{!!$detail->description_premium!!}</span>
                                    </div>

                                </div>
                                <br>
                                <div class="flex center" style="text-align: center;">
                                    <a href="{{route('contact.index')}}">
                                        <button id="btn_vision" type="button" class="btn btn-outline-danger btn-lg btn-block">Contact
                                            Us</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-description tab-pane fade" id="original">
                            <div class="mt-4 mb-5">
                                <span class="font-weight-bold">Description</span>
                                <div class="bullets" style="color:#242424">
                                    <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">{!!$detail->description_original!!}</span>
                                    </div>
                                </div>
                                <br>
                                <div class="flex center" style="text-align: center;">
                                    <a href="{{route('contact.index')}}">
                                        <button id="btn_vision" type="button" class="btn btn-outline-danger btn-lg btn-block">Contact
                                            Us
                                        </button>
                                    </a>
                                </div>
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
        loop: false,
        slideMargin: 0,
        thumbItem: 9,
        enableDrag:false,
        onSliderLoad: function() {  
            $('#lightSlider').magnificPopup({ 
                delegate: 'a', 
                // mainClass: 'mfp-fade',
                type: 'image',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1] // Will preload 0 - before current, and 1 after the current image

                },
                zoom: {
                    enabled: true, // By default it's false, so don't forget to enable it
                    duration: 300, // duration of the effect, in milliseconds
                    easing: 'ease-in-out', // CSS transition easing function
                },
                callbacks: {
                    elementParse: function(item) {
                        // the class name
                        console.log(item.el[0].className)
                        if(item.el[0].className == 'video-link') {
                        item.type = 'iframe';
                        } else {
                        item.type = 'image';
                        }
                    }
                },
            });
        }
    });
    $('p').css('margin-bottom', '0rem');
</script>
@endpush