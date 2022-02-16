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
                <i class="fa fa-whatsapp fa-4x" aria-hidden="true" style="color: #282828;margin-top:6rem;"></i>
            </a>
            <br>
            <span><b style="color:#282828;">Whatsapp</b></span>
            <br>
            <a href=""><span><b>+6212424222</b></span></a>
        </div>
        <div class="col-four">
            <a href="#0"><i class="fa fa-envelope fa-4x" aria-hidden="true" style="color: #282828;margin-top:6rem;"></i>
            </a>
            <br>
            <span><b style="color:#282828;">Mail</b></span>
            <br>
            <a href=""><span><b>javaeins@javaeins.com</b></span></a>
        </div>
        <div class="col-four">
            <a href="#0">
                <i class="fa fa-building fa-4x" aria-hidden="true" style="color: #282828;margin-top:6rem;"></i>
            </a>
            <br>
            <span><b style="color:#282828;"> Address</b></span>
            <br>
            <a href=""><span><b>Jl.Cimahi</b></span></a>
        </div>
    </div> <!-- end section-header -->

    <div class="row-template faq-desc" data-aos="fade-up">
        <div class="shadow-lg card" style="border-radius: 1.5rem;">
            {{-- <div class="card-header">
              Featured
            </div> --}}
            <div class="card-body">
                <form action="" autocomplete="off" autofill="off">
                    <div class="col-six">
                        <div class="form-group">
                            <label class="float-left" for="">Email address</label>
                            <input type="email" class="form-control" name="email" id="" placeholder="name@example.com" style="font-size: 1.4rem;">
                        </div>
                    </div>
                    <div class="col-six">
                        <div class="form-group">
                            <label class="float-left" for="">Full Name</label>
                            <input type="text" class="form-control" name="name" id="" placeholder="Full Name" style="font-size: 1.4rem;">
                        </div>
                    </div>
                    <div class="col-full">
                        <div class="form-group">
                            <label class="float-left" for="">Company Name</label>
                            <input type="text" class="form-control" name="company" id="" placeholder="Company Name" style="font-size: 1.4rem;">
                        </div>
                    </div>
                    <div class="col-six">
                        <div class="form-group">
                            <label for="" class="float-left">Product</label>
                            <select class="form-control" id="" style="font-size: 1.4rem;">
                                <option>Select Your Product</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-six">
                        <div class="form-group">
                            <label class="float-left" for="">Quantity</label>
                            <input type="text" class="form-control" name="quantity" id="" placeholder="Product Quantity" style="font-size: 1.4rem;">
                        </div>
                    </div>
                    <div class="col-full">
                        <div class="form-group">
                            <label for="" class="float-left">Message</label>
                            <textarea class="form-control" id="" rows="3" style="font-size: 1.4rem;"></textarea>
                        </div>
                    </div>
                    <div class="col-full">
                        <button type="button" class="btn-template btn-primary btn-sm btn-block" style="background-color: black; color: #c4c4c4;">Send</button>
                    </div>

                </form>
            </div>
        </div>


    </div>
    </div> <!-- end faq-desc -->



</section> <!-- end s-faq -->
@endsection