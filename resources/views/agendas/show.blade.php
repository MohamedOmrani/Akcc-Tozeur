@extends('layouts.bb')

@section('content')
<br><br><br><br><br>
    <a href ="/agendas" class ="btn btn-info"><i class="fas fa-arrow-circle-left"></i> Back</a>
    <br><br>
<!-- Card -->

<div class="card" >
        <!-- Card image -->
        <h2 class="card-title text-center"><strong>{{$agenda->titre}}</strong></h2>
          <img class="card-img-topp" src="/storage/cover_images/{{$agenda->cover_image}}" width="500px" height="300px" alt="Card image cap">       
        <!-- Card content -->
        <div class="card-body card-body-cascade  ">
          <!-- Subtitle -->
          <div class="row mb-4">
              <div class="col"><i class="fa fa-clock-o"></i> Quand ?</div>
              <div class="col"><i class="fas fa-map-marker-alt"></i> Où ?</div>
              <div class="w-100 mb-2"></div>
              <div class="col"><strong><h6>{{$agenda->datepicker}}</h6></strong></div>
              <div class="col"> {{$agenda->lieu}}</div>
          </div>
         
          <!-- Text -->
          <p class="card-text "> 
            {{$agenda->body}}   
          </p>
          <div class="card-text-righ">
            
              hhhhh

          </div>
        </div>
        <table>
          <tr>
          <td>       
            <a href ="/agendas/{{$agenda->id}}/edit" class ="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
          </td>
          <td>
              <form action="/agendas/{{$agenda->id}}" method="POST">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="Delete">
                </div>
            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</button>
            </form>
         
          </td>
          </tr>
        </table>
      </div>
      </div>
      <!-- Card -->

    <hr>
      {{-- <a href ="/agendas/{{$agenda->id}}/edit" class ="btn btn-primary">Edit</a>
      <form action="/agendas/{{$agenda->id}}" method="POST">
          <div class="form-group">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="Delete">
          </div>
      <button type="submit" class="btn btn-danger">Delete</button>
      
      </form> --}}
         
 <style>
 h2 {
    color: #177bc0;
    font-weight: 600;
    font-size: 2.25em;
    position: relative;
    line-height: 1.2em;
    padding: .75em;
    margin: 0;
    padding-top: 0!important;
    margin-top: 0!important;
    padding-bottom: 7px!important;
    text-align: center;
    cursor: default;
}
</style>
@endsection

