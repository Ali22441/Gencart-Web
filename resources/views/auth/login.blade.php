@extends('layouts.auth')

@section('content')

<div class="content">
    <div class="container">                    
        <div class="signup-widget round shadow">
            <div class="logo">
                <img src="/images/logo-carrot-icon.png" alt="" srcset="">
            </div>
            <div class="sign-up">
                <div class="gencart">
                    <div class="title"> Get your groceries delivered from local stores</div>

                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10">
                                                        

                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">

                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <div class="col-lg-10">
                                        <input type="tel" class="form-control form-control-lg input-zip" placeholder="Phone" name="phone" required>
                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-lg-10">
                                        <input type="password" class="form-control form-control-lg input-zip" placeholder="Password" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
									<div class="col-lg-10">
										<select name="user_type" class="form-control form-control-lg">
											<option selected>Select User Type</option>
											<option value='Customer'>Customer</option>
											<option value='Driver'>Driver</option>
											<option value='Shopper'>Shopper</option>
											<option value='Admin'>Administration</option>
										</select>
										  @if ($errors->has('user_type'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('user_type') }}</strong>
                                            </span>
                                        @endif
										<br>
									</div>
									
								 
										  <div class="col-lg-10">
                                    
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Continue</button>
                                    </div>
                                </div>

                            </form> 
                        
                            <div class="signup-or-login">
                                <ul>
                                    <li>Don't have an account? <a href="{{ route('home')}}">Signup</a></li>
                                </ul>
                            </div>

                            <div class="free-message">
                            <i class="ic-icon ic-icon-gift"></i>
                                <span class="bold">FREE</span>
                                    delivery on your first order*
                            </div>
                        </div>


                        
                    </div>
                    
                </div>
            </div>    
        </div>
    </div> <!-- end container -->  
    
    @include('layouts.partials.links')
</div> <!-- end content -->
@endsection
