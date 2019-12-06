@extends('layouts.bb')
@section('content')
<br>
<h1>List  event </h1><br>

<div class="content">
    <form action='{{url("/recherche")}}' method="POST" >
            {{ csrf_field() }}
          <div class="input-group">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </div>
              <div class="input-group">
                   <input type="search" class="form-control" name="recherche" >
                   <span class="input-group-prepend">
                      <button type="submit" class="btn btn-primary">recherche</button>
                  </span>
               </div>    
     </form>
</div>    
<div class="content ">           
@if (count($posts)>0)
    @foreach ($posts as $post)
             <h3>titre :</h3>{{$post->titre}}
             <h3>body :</h3>{{$post->body}}
             <h3> created_dateTime :</h3>{{$post->created_dateTime}}
             <h3> created_date :</h3>{{$post->created_date}}
             <small>written on {{$post->created_at}} </small>
        </div>
        <hr>
    @endforeach  
@else
    <h1> No recherche found  '_' </h1>
@endif
</div>
@endsection

