@extends('layouts.master')
@section('content')
<section id='faq' class="s-faq">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="jumbo-text text-center text-white">FAQ</h1>

        </div>
    </div>
    <div class="row-template section-header has-bottom-sep" data-aos="fade-up">
        <div class="col-full">
            <h3 class="display-1--dark">Frequent Asked Question</h3>
        </div>
    </div> <!-- end section-header -->

    <div class="row-template faq-desc" data-aos="fade-up">
        <div class="col-full">
            <div class="accordion" id="accordionExample">
                <button class="btn-template btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="padding:0 0rem">
                    <b>Collapsible Group Item #1</b>
                     <i class="fa fa-angle-down float-right" style="margin-top:20px;"></i>
                </button>

                <div id="collapseOne" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body text-left">
                        And lastly, the placeholder content for the third and final accordion panel. This panel is
                        hidden by default.
                    </div>
                </div>
                <button class="btn-template btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="padding:0 0rem">
                    <b>Collapsible Group Item #2</b> 
                    <i class="fa fa-angle-down float-right" style="margin-top:20px;"></i>
                </button>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body text-left">
                        And lastly, the placeholder content for the third and final accordion panel. This panel is
                        hidden by default.
                    </div>
                </div>
                <button class="btn-template btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="padding:0 0rem">
                    <b>Collapsible Group Item #3</b> 
                    <i class="fa fa-angle-down float-right" style="margin-top:20px;"></i>
                </button>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body text-left">
                        And lastly, the placeholder content for the third and final accordion panel. This panel is
                        hidden by default.
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div> <!-- end faq-desc -->



</section> <!-- end s-faq -->
@endsection