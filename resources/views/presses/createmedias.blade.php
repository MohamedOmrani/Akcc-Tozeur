@extends('layouts.bb')

@section('content')
<br><br><br><br><br>
<h1> create medias</h1>

<form action="/storemedias" method="POST"  >
        <div class="form-group">
          <label >Title</label> 
          <input type="text" name="titre" id='titre' class="form-control" placeholder="titre">
        </div>  
        <div class="form-group">
            <label >body</label>
                   <input class="form-control" name="body" type="text" id="body" rows="10" placeholder="body">
            </div>
            <div class="form-group">
                   <label >task_date</label> 
                    <input name="datepicker" data-format="yyyy-mm-dd" id='datepicker' width="500"   >
                           <script>
                                   $('#datepicker').datepicker({
                                   uiLibrary: 'bootstrap4'
                                   });
                           </script>
           </div>     
        <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
        
        <button type="Submit" class="btn btn-primary" id="btn">Submit</button>
</form>
@endsection



