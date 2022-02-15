@extends('layouts.master')
@section('content')
<section id='faq' class="s-faq">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="jumbo-text text-center text-white">Get Ahold Of Us</h1>

        </div>
    </div>
    <div class="row-template section-header has-bottom-sep" data-aos="fade-up">
        <div class="col-four">
            <a href="#0">
                <i class="fa fa-whatsapp fa-5x" aria-hidden="true" style="color: black;margin-top:6rem;"></i>
            </a>
            <br>
            <span><b>Whatsapp</b></span>
            <br>
            <a href=""><span><b>+6212424222</b></span></a>
        </div>
        <div class="col-four">
            <a href="#0"><i class="fa fa-envelope fa-5x" aria-hidden="true" style="color: black;margin-top:6rem;"></i>
            </a>
            <br>
            <span><b>Mail</b></span>
            <br>
            <a href=""><span><b>javaeins@javaeins.com</b></span></a>
        </div>
        <div class="col-four">
            <a href="#0">
                <i class="fa fa-building fa-5x" aria-hidden="true" style="color: black;margin-top:6rem;"></i>
            </a>
            <br>
            <span><b>Address</b></span>
            <br>
            <a href=""><span><b>Jl.Cimahi</b></span></a>
        </div>
    </div> <!-- end section-header -->

    <div class="row-template faq-desc has-bottom-sep" data-aos="fade-up">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('assets_front/images/background2.jpg')}}" class="img-fluid mx-auto d-block"
                        alt="img1">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('assets_front/images/bg1.jpg')}}" class="img-fluid mx-auto d-block" alt="img2">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('assets_front/images/bg1.jpg')}}" class="img-fluid mx-auto d-block" alt="img3">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('assets_front/images/background2.jpg')}}" class="img-fluid mx-auto d-block"
                        alt="img4">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('assets_front/images/bg1.jpg')}}" class="img-fluid mx-auto d-block" alt="img5">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('assets_front/images/background2.jpg')}}" class="img-fluid mx-auto d-block"
                        alt="img6">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('assets_front/images/bg1.jpg')}}" class="img-fluid mx-auto d-block" alt="img7">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('assets_front/images/background2.jpg')}}" class="img-fluid mx-auto d-block"
                        alt="img8">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>




</section> <!-- end s-faq -->
@endsection
@push('scripts')
<script>
    $('#carousel-example').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});
</script>
@endpush