@extends('layouts.infolink')



@section('content')

    <div class="container-fluid">
        <div class="row justify-content-end bg-primary postion-relative" style="height:30vh;">
            <div class="col align-self-end   text-center">
               <div class="text-light p-2">
                    <h1 class="display-3">FAQ <i class="fa fa-question-circle"></i></h1>
               </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12">
                <p>if your questions are not answered here pls <a href="#" class="btn btn-outline-success">get in touch</a></p>
                <hr>
            </div>
        </div>
     
        <div class="w-100"></div>
            <div class="col-lg-12">
                <div id="accordion" role="tablist">
                    <div class="card rounded-0 border-0">
                        <div class="card-header  border-0" role="tab" id="headingOne">
                        <h5 class="mb-0 ">
                            <a class="btn btn-link btn-block text-left text-uppercase text-secondary" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         <i class="fa fa-caret-down"></i>&nbsp;How can I become a shopper
                            </a>
                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                    <div class="card rounded-0  border-0">
                        <div class="card-header border-0" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                            <a class="collapsed btn btn-link btn-block text-left text-uppercase text-secondary"  data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fa fa-caret-down"></i>&nbsp;How can i change my address
                            </a>
                        </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                    <div class="card rounded-0  border-0">
                        <div class="card-header border-0" role="tab" id="headingThree">
                        <h5 class="mb-0">
                            <a class="collapsed btn btn-link btn-block text-left text-uppercase text-secondary" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="fa fa-caret-down"></i>&nbsp;what are coupons
                            </a>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>

                    <div class="card rounded-0  border-0">
                        <div class="card-header border-0" role="tab" id="headingFour">
                        <h5 class="mb-0">
                            <a class="collapsed btn btn-link btn-block text-left text-uppercase text-secondary" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapsFour">
                            <i class="fa fa-caret-down"></i>&nbsp;what happens if there is a delivery mishap on my goods
                            </a>
                        </h5>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>

                     <div class="card rounded-0  border-0">
                        <div class="card-header border-0" role="tab" id="headingFive">
                        <h5 class="mb-0">
                            <a class="collapsed btn btn-link btn-block text-left text-uppercase text-secondary" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapsFive">
                            <i class="fa fa-caret-down"></i>&nbsp;what are the payments method available
                            </a>
                        </h5>
                        </div>
                        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>

                     <div class="card rounded-0  border-0">
                        <div class="card-header border-0" role="tab" id="headingsix">
                        <h5 class="mb-0">
                            <a class="collapsed btn btn-link btn-block text-left text-uppercase text-secondary" data-toggle="collapse" href="#collapsesix" aria-expanded="false" aria-controls="collapssix">
                            <i class="fa fa-caret-down"></i>&nbsp;How can I cancel my order before i make payment
                            </a>
                        </h5>
                        </div>
                        <div id="collapsesix" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>

                     <div class="card rounded-0  border-0">
                        <div class="card-header border-0" role="tab" id="headingseven">
                        <h5 class="mb-0">
                            <a class="collapsed btn btn-link btn-block text-left text-uppercase text-secondary" data-toggle="collapse" href="#collapseseven" aria-expanded="false" aria-controls="collapsseven">
                            <i class="fa fa-caret-down"></i>&nbsp;How long will it take for my product to arrive after i make payment
                            </a>
                        </h5>
                        </div>
                        <div id="collapseseven" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

   
@endsection

@section('scripts')

@endsection
