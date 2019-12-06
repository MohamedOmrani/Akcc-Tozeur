@extends('layouts.bb')

@section('content')
<br><br><br><br><br>
<h1> Edit presse</h1>
<form action="/presses/{{$presse->id}}" method="POST">
        <div class="form-group">
          <label >Title</label>
        <input type="text" name="titre" class="form-control" placeholder="titre" value="{{$presse->titre}}">
          
        </div>
        <div class="form-group">
            <label >body</label>
            <input class="form-control" name="body" type="text" rows="10" placeholder="body" value="{{$presse->body}}">
    </div>
    <div class="form-group">
      <label >task_date</label> 
       <input name="datepicker" data-format="yyyy-mm-dd" id='datepicker' width="500" value="{{$presse->datepicker}}"   >
              <script>
                      $('#datepicker').datepicker({
                      uiLibrary: 'bootstrap4'
                      });
              </script>
</div>    
        <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection