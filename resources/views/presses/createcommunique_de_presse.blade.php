@extends('layouts.bb')

@section('content')
<br><br><br><br><br>
<h1> Create communique_de_presse</h1>

<form action="/storecommunique_de_presse" method="POST"  >
        <div class="form-group">
          <label >Title</label> 
          <input type="text" name="titre" id='titre' class="form-control" placeholder="titre">
        </div>   
        <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
        
        <button type="Submit" class="btn btn-primary" id="btn">Submit</button>
</form>
@endsection



