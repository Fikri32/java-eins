@extends('layouts.master')
@section('content')
<section id='faq' class="s-faq">
    <div class="jumbotron-contact jumbotron-fluid">
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
            <a href="https://wa.me/+6282114875743" target="_blank"><span><b>+62 821-1487-5743</b></span></a>
        </div>
        <div class="col-four">
            <a href="#0"><i class="fa fa-envelope fa-4x" aria-hidden="true" style="color: #282828;margin-top:6rem;"></i>
            </a>
            <br>
            <span><b style="color:#282828;">Mail</b></span>
            <br>
            <a href="mailto:marketing@javaeins.com"><span><b>marketing@javaeins.com</b></span></a>
        </div>
        <div class="col-four">
            <a href="#0">
                <i class="fa fa-building fa-4x" aria-hidden="true" style="color: #282828;margin-top:6rem;"></i>
            </a>
            <br>
            <span><b style="color:#282828;"> Address</b></span>
            <br>
            <a href="https://goo.gl/maps/HWrvgRZe4G816UtBA" target="_blank"><span><b>Jl.Dae Achmad Kartiputra Kavling Hj.Ukimer 3 C Kota Cimahi Kecamatan Cimahi Tengah, 40522</b></span></a>
        </div>
    </div> <!-- end section-header -->

    <div class="row-template faq-desc" data-aos="fade-up">
        <div class="shadow-lg card" style="border-radius: 1.5rem;">
            {{-- <div class="card-header">
              Featured
            </div> --}}
            <div class="card-body pt-5">
                <form id="frm_add" method="POST" autocomplete="off" autofill="off">
                    {{ csrf_field() }}
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_template" value="box">
                    {{-- <input type="hidden" name="_next" value="http://localhost:8000/contact"> --}}
                    <div class="col-six">
                        <div class="form-group">
                            <label class="float-left" for="">Email address</label>
                            <input type="email" class="form-control" name="email" id="" placeholder="name@example.com" style="font-size: 1.4rem; border-color:#282828">
                        </div>
                    </div>
                    <div class="col-six">
                        <div class="form-group">
                            <label class="float-left" for="">Full Name</label>
                            <input type="text" class="form-control" name="name" id="" placeholder="Full Name" style="font-size: 1.4rem; border-color:#282828;">
                        </div>
                    </div>
                    <div class="col-full">
                        <div class="form-group">
                            <label class="float-left" for="">Company Name</label>
                            <input type="text" class="form-control" name="company" id="" placeholder="Company Name" style="font-size: 1.4rem; border-color:#282828;">
                        </div>
                    </div>
                    <div class="col-six">
                        <div class="form-group">
                            <label for="" class="float-left">Product</label>
                            <select class="form-control" name="product" id="" style="font-size: 1.4rem; border-color:#282828;">
                                <option>Select Your Product</option>
                                @foreach ($catalogues as $item)
                                    @if ($item->status == 0 )
                                    {
                                        <option value="{{$item->name}}" disabled style="color=#7777">
                                            {{$item->name}}
                                        </option>
                                    }@else{
                                        <option value="{{$item->name}}">
                                            {{$item->name}}
                                        </option>
                                    }
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-six">
                        <div class="form-group">
                            <label class="float-left" for="">Quantity</label>
                            <input type="text" class="form-control" name="quantity" id="" placeholder="Product Quantity" style="font-size: 1.4rem; border-color:#282828;">
                        </div>
                    </div>
                    <div class="col-full">
                        <div class="form-group">
                            <label for="" class="float-left">Message</label>
                            <textarea name="message" class="form-control" id="" rows="3" style="font-size: 1.4rem; border-color:#282828;"></textarea>
                        </div>
                        <div class="col-full pl-0 pr-0">
                            <button type="button" onclick="contact()" class="btn-template btn-primary btn-sm btn-block border-0" style="background-color: black; color: #c4c4c4;">Send</button>
                        </div>

                </form>
            </div>
        </div>


    </div>
    </div> <!-- end faq-desc -->



</section> <!-- end s-faq -->
@endsection
@push('scripts')
<script>
    function contact() {
        $.ajax({
            // headers : {
            //     'X-CSRF-TOKEN' : "{{csrf_token()}}"
            // },
            method: 'POST',
            url: 'https://formsubmit.co/ajax/javaeins@gmail.com',
            data: $('#frm_add').serialize(),
            beforeSend: function() {
                $('#modal-xl').modal('hide')
                Swal.fire({
                    title: 'Please Wait...',
                    text: 'Your data is being processed!',
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
            },
            success: function(res) {
                $('#frm_add').trigger("reset");
                Swal.fire({
                    title: 'Action Success!',
                    icon: 'success',
                    text: 'Your Message Has Been Sent',
                    showConfirmButton: true
                })
                // $("#heading").text("Action Success")
                // $("#body").text("New product successfully created")

                // setInterval(() => {
                //   $('#loading-modal').modal('hide')
                // }, 2000)
            },
            error: function(xhr, ajaxOptions, thrownError) {
                $('#frm_add').trigger("reset");
                Swal.fire({
                    title: 'Whoopsss....',
                    icon: 'error',
                    text: 'Your Message Has Not Been Sent',
                    showConfirmButton: true
                })
            }
        });
    }
</script>
@endpush