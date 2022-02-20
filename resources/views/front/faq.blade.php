@extends('layouts.master')
@section('content')
<section id='faq' class="s-faq">
    <div class="jumbotron-faq jumbotron-fluid">
        <div class="container">
            <h1 class="jumbo-text text-center text-white">FAQ's</h1>

        </div>
    </div>
    <div class="row-template section-header has-bottom-sep" data-aos="fade-up">
        <div class="col-full">
            <h3 class="display-1--dark">Frequently Asked Question</h3>
        </div>
    </div> <!-- end section-header -->

    <div class="row-template faq-desc" data-aos="fade-up">
        <div class="col-full">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title text-left mt-0 mb-0">
                            <a class="btn btn-block text-left" data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="border:0.2rem solid #c5c5c5;font-size:2.1rem">
                                Coconut Charcoal Payment Terms?
                                <i class="fa fa-angle-down float-right" style="margin-top: 4px;margin-left: 2px; color:#c4c4c4;"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body text-justify mb-5">
                            All payments should be made via TT (Telegraph transfer) bank transfer to our company account
                            in Indonesia. Swift code CENAIDJA for BCA We do not accept L/C for the volume of fewer than
                            10 containers of coconut charcoal. Payment should be done in USD, free from issued bank
                            charges
                            Payment terms are 50% down payment. After receiving this payment we start production of
                            coconut charcoal.
                            <br>
                            After Loading the Container, charcoal is shipped we prepare shipping documents: Bill of
                            Lading, Certificate of origin, invoice, packing list. It takes 3-5 days to prepare all the
                            documents. Right after that, we send you a photocopy of B/L and COO. Now is your turn to
                            transfer us the rest 50% of payment. After we receive payment we send you original documents
                            via DHL or just a telex release.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title text-left mt-0 mb-0">
                            <a class="btn btn-block text-left" data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="border:0.2rem solid #c5c5c5;font-size:2.1rem">
                                How to Order?
                                <i class="fa fa-angle-down float-right" style="margin-top: 4px;margin-left: 2px; color:#c4c4c4;"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse in">
                        <div class="panel-body text-justify mb-5">
                            To order coconut charcoal for hookah & shisha – choose charcoal specification. We produce coconut charcoal in Premium, Standard, and Economy types.
                            contact us via Whatsapp +62 82114875743 or <a href="mailto:marketing@javaeins.com">marketing@javaeins.com</a> . We will confirm production dates, availability and issue your invoice
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title text-left mt-0 mb-0">
                            <a class="btn btn-block text-left" data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="border:0.2rem solid #c5c5c5;font-size:2.1rem">
                                Minimum Order Quantity?
                                <i class="fa fa-angle-down float-right" style="margin-top: 4px;margin-left: 2px; color:#c4c4c4;"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse in">
                        <div class="panel-body text-justify mb-5 border-0">
                            The minimum order to purchase is 20 Feet Container or 18 tons of Briquettes, also we provide 40Ft Container which Fill up to 25 Tons of Briquettes
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div> <!-- end faq-desc -->



</section> <!-- end s-faq -->
@endsection