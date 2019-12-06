@extends('layouts.bb')
@section('content')
<br><br><br><br><br><br>
<center>
  <h1>Liste des Voilentaires</h1>
  <hr class="new5">
</center>


{{-- <div class="content">
      <form action='{{url("/search")}}' method="POST" >
              {{ csrf_field() }}
            <div class="input-group">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
                <div class="input-group">
                     <input type="search" class="form-control" name="search">
                     <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">search</button>
                    </span>
                 </div>    
       </form>
</div> --}}

@if (count($adds)>0)
<div class="list-group">
    <table class="table table-hover">
              <tr>
                
                <th scope="col">lastname</th>
                <th scope="col">firstname</th>
                <th scope="col">Email</th>
                <th scope="col">Tel</th>
                <th scope="col">city</th>
                <th scope="col">Job</th>
                <th scope="col">Delete</th>
                <th scope="col">Delete</th>
              </tr>   
    @foreach ($adds as $add)
                 <tr>
                      <td>{{$add->lastname}}</td>
                      <td>{{$add->firstname}}</td>
                      <td>{{$add->mailinput}}</td>
                      <td>{{$add->Tel}}</td>
                      <td>{{$add->city}}</td>
                      <td>{{$add->Job}}</td>
                      <td> <a href ="/adds/{{$add->id}}/edit" class ="btn btn-primary">Edit</a></td>
                      <form action="/adds/{{$add->id}}" method="POST">
                              <div class="form-group">
                                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                   <input type="hidden" name="_method" value="Delete">
                              </div>
                       <td>
                          <button type="submit" class="btn btn-danger">Delete</button>
                       </td>
                       </form>
                  </tr>
      
    @endforeach  
  </table>
    {{$adds->links()}}
  </div>  
@else
    <h1> No search found  '_'</h1>
@endif
<style>
  hr.new5 {
  border: 5px solid green;
  border-radius: 5px;
  width:50%;
}
@endsection
