@extends('layouts.master')
@section('content')

<section id="home" class="s-home target-section" data-parallax="scroll" data-natural-width=3000 data-natural-height=2000 data-image-src="{{asset('assets_front/images/bg1.jpg')}}" data-position-y=center>
    <!--  -->

    <div class="overlay"></div>
    <div class="shadow-overlay"></div>

    <div class="home-content">

        <div class="row home-content__main">

            <img src="{{asset('assets_front/images/javaeins.png')}}" alt="" style="display: block; margin-left: auto; margin-right: auto;">

            <!-- <h3>Welcome to Glint</h3> -->

            <h1 style="text-align: center;">
                JAVA EINS
            </h1>

            <h3 style="text-align: center;">
                Worldwide Bricket Seller Company
            </h3>

            <!-- <div class="home-content__buttons">
                <a href="#contact" class="smoothscroll btn btn--stroke">
                    Start a Project
                </a>
                <a href="#about" class="smoothscroll btn btn--stroke">
                    More About Us
                </a>
            </div> -->

        </div>

        <div class="home-content__scroll">
            <a href="#about" class="scroll-link smoothscroll">
                <span>Scroll Down</span>
            </a>
        </div>

        <!-- <div class="home-content__line"></div> -->

    </div> <!-- end home-content -->


    <ul class="home-social">
        <li>
            <a href="#0"><i class="fa fa-facebook" aria-hidden="true" style="color: #e50914;"></i><span>Facebook</span></a>
        </li>
        <li>
            <a href="#0"><i class="fa fa-twitter" aria-hidden="true" style="color: #e50914;"></i><span>Twiiter</span></a>
        </li>
        <li>
            <a href="#0"><i class="fa fa-instagram" aria-hidden="true" style="color: #e50914;"></i><span>Instagram</span></a>
        </li>
        <li>
            <a href="#0"><i class="fa fa-envelope" aria-hidden="true" style="color: #e50914;"></i><span>Email</span></a>
        </li>
        <!--<li>
            <a href="#0"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
        </li> -->
    </ul>
    <!-- end home-social -->

</section> <!-- end s-home -->
@endsection