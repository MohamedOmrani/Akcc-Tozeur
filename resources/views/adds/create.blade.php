@extends('layouts.bb')

@section('content')
<br><br><br><br><br>
<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <p class="lead">Le volontariat est devenu une base importante dans la construction de la société et son développement, et les efforts des volontaires sont devenus complémentaires aux efforts déployés dans chaque institution caritative pour son bien et pour son bien afin de répondre aux besoins des bénéficiaires.</p>
    <p class="lead">Le volontariat est devenu une base importante dans la construction de la société et son développement, et les efforts des volontaires sont devenus complémentaires aux efforts déployés dans chaque institution caritative pour son bien et pour son bien afin de répondre aux besoins des bénéficiaires.</p>
  </div>
  <div class="col-md-5 order-md-1">
   <h2>Introduction au bénévolat</h2> 
  </div>
</div>

<hr class="featurette-divider">

<center><h1>Demander inscription Voilentaire</h1>
  <hr class="new5">
</center>

<br><br>
<form action="{{ URL::route('adds.store') }}" method="POST" accept-charset="utf-8">
  <div class="form-row">
    <div class="col">
    <div class="form-group col-md-10 text-muted" >
       <label for="lastname"><h5>Last Name</h5></label>
       <input class="input1" type="text" class="form-control" id="lastname"  name="lastname" placeholder="Last Name">
      </div>   
    </div>  

    <div class="col">
     <div class="form-group col-md-10 text-muted">
       <label for="firstname"><h5>First Name</h5></label>
       <input  class="input1" type="text" class="form-control" id="firstname"  name="firstname" placeholder="First Name">
     </div>
     </div>
    </div>
    <div class="form-row">
      <div class="col">
     <div class="form-group col-md-10 text-muted">
            <label for="email"><h5>Email address </h5> </label>
            <input class="input1" type="email" class="form-control" name="mailinput" id="email"  placeholder="Email address">
        </div>
      </div>
      <div class="col">
     <div class="form-group col-md-10 text-muted">
            <label for="Tel"><h5>Phone</h5></label>
            <input  class="input1" type="number" class="form-control" id="Tel"  name="Tel" placeholder="Phone">
          </div>
        </div>
        </div>
        <div class="form-row">
          <div class="col">
        <div class="form-group col-md-10 text-muted">
            <label for="city"><h5>City</h5></label>
            <input class="input1" type="text" class="form-control" id="city"  name="city" placeholder="City" >
        </div>
        </div>
        <div class="col">
     <div class="form-group col-md-10 text-muted">
       <label for="Job"><h5>Function and place of work</h5></label>
       <input class="input1" type="text" class="form-control" id="Job"  name="Job" placeholder="Function and place of work" >
     </div>
     </div>
     </div>
     <div class="col">
     <div class="form-group">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>
    </div>
    <div class="container-contact1-form-btn mb-5"  >
      <button class="contact1-form-btn" type="submit">
        <span>
          Send 
          <i class="fas fa-location-arrow" aria-hidden="true"></i>
        </span>
      </button>
    </div>
    
 </form>
 
  <style>
  hr.new5 {
  border: 5px solid red;
  border-radius:5px;
  width:40%;
}

  </style>
@endsection
