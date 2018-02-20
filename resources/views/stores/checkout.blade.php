@extends('layouts.simple')

@section('content')


<div class="card border-success">
  <div class="card-header border-success">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Address</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>

  <div class="card-body">
    <h4 class="card-title text-left"><span class="fa fa-map-marker text-success"></span>&nbsp;Delivery Address</h4>
    <form>
            
            

            <div class="form-row">
                <div class="col">
                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                </div>
                <div class="col">
                <textarea name="message" class="form-control form-control-lg" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
    </form>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


@endsection

