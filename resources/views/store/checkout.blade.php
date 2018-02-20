@extends('layouts.checkout-layout')

@section('content')
        <div class="container">
            <div class="checkout-header">
                <div class="checkout-progress">
                    <ul>
                        <li class="active">Address</li>
                        <li class="active">Schedule</li>
                        <li class="">Payment</li>
                        <li class="">Review</li>
                    </ul>
                </div>
            </div>
        </div>        

        <div class="container">
            <div class="checkout-container">
                <div class="row">
                    <div class="col-md-6">
                        <form method="post">

                            <div class="form-group">
                                <label for="street-address">Street Address <span class="text-danger">*</span></label>
                                <input type="text" name="street-address" class="form-control form-control-lg" id="street-address" placeholder="Street Address">
                            </div>

                        
                            <div class="form-group">
                                <label for="apt-no">Apt Number (<small>Optional</small>)</label>
                                <input type="text" name="apt-no" class="form-control form-control-lg" id="apt-no" placeholder="Apt #">
                            </div>

                            <div class="form-group">
                                <label for="business-name">Business Name (<small>Optional</small>)</label>
                                <input type="text" name="business-name" class="form-control form-control-lg" id="business-name" placeholder="Business name">
                            </div>

                            <div class="row">
                                <div class="col">
                                    <input type="text" name="zipcode" class="form-control form-control-lg" placeholder="Zipcode">
                                </div>
                                <div class="col">
                                    <!-- <input type="text" class="form-control-plaintext" value="San Francisco, CA"> -->
                                    <p>San Francisco, CA</p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="business-name">Phone Number <span class="text-danger">*</span></label>
                            <input type="text" name="business-name" class="form-control form-control-lg" id="business-name" placeholder="Business name">
                        </div>
                        <!-- <small>we will contact using this number when we arrive</small> -->
                        <div class="form-group">
                                <label for="instructions">Instructions for delivery (<small>optional</small>)</label>
                                <textarea class="form-control" id="" rows="4"></textarea>
                            </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-md-12">
						
						  <a class="btn btn-default btn-block btn-lg" style="display:flex; justify-content: space-between;" href={{ route('checkout-payment') }}>

                Continue
            </a>
						
<!--                        <button type="submit" action={{ route('checkout-payment') }}  class="btn btn-success float-right">Continue</button>-->
                    </div>
                </div>
            </div>
        </div>

@endsection
