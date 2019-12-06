{{-- @extends('layouts.app')

@section('content')
<br>
<form action="/testMail" method="POST">
  
    <div class="form-group col-md-6">
       <label for="lastname"><h3>lastname</h3></label>
       <input type="text" class="form-control" id="lastname"  name="lastname" placeholder="lastname">
     </div>   
     <div class="form-group col-md-6">
       <label for="firstname"><h3>firstname</h3></label>
       <input type="text" class="form-control" id="firstname"  name="firstname" placeholder="firstname">
     </div>
     <div class="form-group col-md-6">
            <label for="email"><h3>Email Reciever </h3> </label>
            <input type="email" class="form-control" name="mailinput" id="email"  placeholder="Enter email">
        </div>
     <div class="form-group col-md-6">
            <label for="Tel"><h3>Tel</h3></label>
            <input type="number" class="form-control" id="Tel"  name="Tel" placeholder="Tel">
          </div>

        <div class="form-group col-md-6">
            <label for="city"><h3>city</h3></label>
            <input type="text" class="form-control" id="city"  name="city" placeholder="city" >
        </div>
 
     <div class="form-group col-md-6">
       <label for="Job"><h3>Job</h3></label>
       <input type="text" class="form-control" id="Job"  name="Job" placeholder="Job" >
     </div>
     <div class="form-group">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
 </form>
@endsection
       --}}