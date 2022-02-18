@extends('layouts.master')
@section('content')
<section id='faq' class="s-faq">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="jumbo-text text-center text-white">Detail Product</h1>

        </div>
    </div>
    <div class="container-fluid mt-2 mb-3">
        <div class="row no-gutters">
            <div class="col-md-5 pr-2">
                <div class="card-detail shadow-lg">
                    <div class="demo-detail">
                        <ul class="ul-detail" id="lightSlider">
                            <li class="li-detail" data-thumb="https://i.imgur.com/KZpuufK.jpg"> <img class="img-detail" src="https://i.imgur.com/KZpuufK.jpg" /> </li>
                            <li class="li-detail" data-thumb="https://i.imgur.com/GwiUmQA.jpg"> <img class="img-detail" src="https://i.imgur.com/GwiUmQA.jpg" /> </li>
                            <li class="li-detail" data-thumb="https://i.imgur.com/DhKkTrG.jpg"> <img class="img-detail" src="https://i.imgur.com/DhKkTrG.jpg" /> </li>
                            <li class="li-detail" data-thumb="https://i.imgur.com/kYWqL7k.jpg"> <img class="img-detail" src="https://i.imgur.com/kYWqL7k.jpg" /> </li>
                            <li class="li-detail" data-thumb="https://i.imgur.com/c9uUysL.jpg"> <img class="img-detail" src="https://i.imgur.com/c9uUysL.jpg" /> </li>
                            <li class="li-detail" data-thumb="https://i.imgur.com/KZpuufK.jpg"> <img class="img-detail" src="https://i.imgur.com/KZpuufK.jpg" /> </li>
                            <li class="li-detail" data-thumb="https://i.imgur.com/GwiUmQA.jpg"> <img class="img-detail" src="https://i.imgur.com/GwiUmQA.jpg" /> </li>
                            <li class="li-detail" data-thumb="https://i.imgur.com/DhKkTrG.jpg"> <img class="img-detail" src="https://i.imgur.com/DhKkTrG.jpg" /> </li>
                            <li class="li-detail" data-thumb="https://i.imgur.com/kYWqL7k.jpg"> <img class="img-detail" src="https://i.imgur.com/kYWqL7k.jpg" /> </li>
                            <li class="li-detail" data-thumb="https://i.imgur.com/c9uUysL.jpg"> <img class="img-detail" src="https://i.imgur.com/c9uUysL.jpg" /> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card-detail shadow-lg">
                    <div class="d-flex flex-row align-items-center">
                        <div class="p-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="ml-1">5.0</span>
                    </div>
                    <div class="about"> <span class="font-weight-bold">IKEA x HAY Ypperlig Collection </span>
                        <h4 class="font-weight-bold">$3,444</h4>
                    </div>
                    <div class="buttons-detail"> 
                        <button class="btn-detail btn-lg btn-outline-danger btn-long-detail cart-detail">Add to Cart</button> 
                    </div>
                    <hr>
                    <div class="product-description">
                        <div class="mt-2"> <span class="font-weight-bold">Description</span>
                            <p>The minimalist collaboration features chairs, lightening, Shelves, Sofas, Desks and various home accessories, all offering form and function at the same point.We use high-strength clamps and joinery techniques specially designed for engineered wood beds. Ergo, no irksome creaks - and you can sleep like a baby, well into adulthood!</p>
                            <div class="bullets">
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Best in Quality</span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Anti-creak joinery</span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Sturdy laminate surfaces</span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Relocation friendly design</span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">High gloss, high style</span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Easy-access hydraulic storage</span> </div>
                            </div>
                        </div>
                        <div class="mt-2"> <span class="font-weight-bold">Store</span> </div>
                        <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/N2fYgvD.png" class="rounded-circle store-image">
                            <div class="d-flex flex-column ml-1 comment-profile">
                                <div class="comment-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="username">Rare Boutique</span> <small class="followers">25K Followers</small>
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