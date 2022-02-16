@extends('layouts.master')
@section('content')
<section id='faq' class="s-faq">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="jumbo-text text-center text-white">About Java Eins</h1>

        </div>
    </div>
    <div class="row-template has-bottom-sep" data-aos="fade-up">
        <div class="col-md-6">
            <a href="#0">
                <button id="btn_about" type="button" class="btn-template btn-primary btn-sm btn-block" style="margin-top: 6rem; background-color:black; color: #c4c4c4;width:70%">About</button>
            </a>
            <a href="#0">
                <button id="btn_vision" type="button" class="btn-template btn-primary btn-sm btn-block" style="background-color:black; color: #c4c4c4;width:70%">Vision & Mission</button>
            </a>
            <a href="#0">
                <button id="btn_order" type="button" class="btn-template btn-primary btn-sm btn-block" style="background-color:black; color: #c4c4c4;width:70%">How To Order</button>
            </a>
            <div>
                <img class="img-fluid" src="{{asset('assets_front/images/cube_2.png')}}" alt="">
            </div>
        </div>
    

        <!-- About -->
        <div id="about" class="col-md-6">
            <h1>Get To Know About Us</h1>
            <p class="text-justify">
                PT.Java Eins is a supplier, manufacturer and distributor of coco shisha briquettes from Indonesia. We are committed to providing the best quality product and competitive prices to help you with your briquette needs. Java Eins is a legal company registered in Indonesia. The entire payment process uses the L/C Method through the bank.
                We have 4 shisha briquette products : Cube, flat, hexagonal, Cylinder/Stick. Our production capacity is up to 10Mt per month
            </p>
        </div>

        <!-- Vision Mission -->
        <div id="vision" class="col-md-6">
            <h1 class="text-center">Vission & Mission</h1>

            <h2 class="text-left">Our Vision</h2>
            <p class="text-justify">
                We are committed to providing your needs through shisha briquette products by providing the best quality.
            </p>

            <h2 class="text-left">Our Commitment</h2>
            <ul class="text-justify">
                <li>
                    Focus on our quality to establish a trusting business relationship with clients
                </li>
                <li>
                    Great in service leading to good quality products and bring great value to our customers.
                </li>
            </ul>

            <h2 class="text-left">Characteristic</h2>
            <ul class="text-justify">
                <li>
                    <p>
                        <b>Eco Friendly</b><br>
                        Made from 100% natural ingredients.
                    </p>
                </li>
                <li>
                    <p>
                        <b>Longer Burning Time</b><br>
                        Consistently burning hotter and longer durations compared to wood briquettes.
                    </p>
                </li>
                <li>
                    <p>
                        <b>Low Ash</b><br>
                        Little ash Residue.
                    </p>
                </li>
                <li>
                    <p>
                        <b>No Chemical and No Smells</b><br>
                        No chemical components in production process and the results is no smells when burning.
                    </p>
                </li>
            </ul>
        </div>

        <!-- How to order -->
        <div id="order" class="col-md-6">
            <h1 class="text-left">How To Order</h1>
            <ul class="text-justify" style="list-style-type: none; margin-left:0px;">
                <li>
                    <p>
                        <b>Step 1:</b><br> The customer will be sent a sample of coconut charcoal briquettes that are of interest to the customer and then the customer will be studied such as drop test, burning test, ash content, etc.
                    </p>
                </li>
                <li>
                    <p>
                        <b>Step 2:</b><br> If the sample matches the customer's standard, the customer can directly contact us to discuss the price, payment terms, and shipping terms.
                    </p>
                </li>
                <li>
                    <p>
                        <b>Step 3:</b><br> Payment of 40% DP can be made using the L/C method.
                    </p>
                </li>
                <li>
                    <p>
                        <b>Step 4:</b><br> Our continuous collection of charcoal products will be given special prices.
                    </p>
                </li>
            </ul>
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
        $(document).ready(function () {
            $("#about").show();
            $("#vision").hide();
            $("#order").hide();
        })
        $("#btn_about").click(function () {
                $("#about").show();
                $("#vision").hide();
                $("#order").hide();
            });

        $("#btn_vision").click(function () {
            $("#about").hide();
            $("#vision").show();
            $("#order").hide();
        });

        $("#btn_order").click(function () {
            $("#about").hide();
            $("#vision").hide();
            $("#order").show();
        });
    </script>
@endpush