@extends('layouts.app')

@section('content') 
<br><br><br><br><br>
<center><h1>Editer Demander inscription Voilentaire</h1>
  <hr class="new5">
</center>
<br>
<form action="{{ URL::route('adds.update',$add->id )}}"  method="POST" accept-charset="utf-8">
     <div class="form-row">
      <div class="col">
      <div class="form-group col-md-10 text-muted" >
         <label for="lastname"><h5>Last Name</h5></label>
         <input class="input1" type="text" class="form-control" value="{{$add->lastname}}"  id="lastname"  name="lastname" placeholder="Last Name">
        </div>   
      </div>  
    
      <div class="col">
       <div class="form-group col-md-10 text-muted">
         <label for="firstname"><h5>First Name</h5></label>
         <input  class="input1" type="text" class="form-control"value="{{$add->firstname}}"  id="firstname"  name="firstname" placeholder="First Name">
       </div>
       </div>
      </div>
      <div class="form-row">
        <div class="col">
       <div class="form-group col-md-10 text-muted">
              <label for="email"><h5>Email address </h5> </label>
              <input class="input1" type="email" class="form-control"value="{{$add->mailinput}}"  name="mailinput" id="email"  placeholder="Email address">
          </div>
        </div>
        <div class="col">
       <div class="form-group col-md-10 text-muted">
              <label for="Tel"><h5>Phone</h5></label>
              <input  class="input1" type="number" class="form-control"value="{{$add->Tel}}"  id="Tel"  name="Tel" placeholder="Phone">
            </div>
          </div>
          </div>
          <div class="form-row">
            <div class="col">
          <div class="form-group col-md-10 text-muted">
              <label for="city"><h5>City</h5></label>
              <input class="input1" type="text" class="form-control"value="{{$add->city}}"  id="city"  name="city" placeholder="City" >
          </div>
          </div>
          <div class="col">
       <div class="form-group col-md-10 text-muted">
         <label for="Job"><h5>Function and place of work</h5></label>
         <input class="input1" type="text" class="form-control" id="Job"value="{{$add->Job}}"   name="Job" placeholder="Function and place of work" >
       </div>
       </div>
       </div>
       <div class="col">
       <div class="form-group">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </div>
      </div>
      <div class="form-group">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">
      </div>
      <div class="container-contact1-form-btn"  >
        <button class="contact1-form-btn" type="submit">
          <span>
            Editer 
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
          </span>
        </button>
      </div>
 </form>
<br><br>

 <style>
  hr.new5 {
  border: 5px solid red;
  border-radius:5px;
  width:40%;
}

  </style>
  
@endsection
      