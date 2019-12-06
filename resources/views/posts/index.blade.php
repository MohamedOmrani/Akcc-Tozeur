@extends('layouts.bb')
@section('content')
<br><br><br><br><br><br><br><br>
<h1>La campagne d'octobre</h1><br>

<div class="content">
    <form action='{{url("/recherche")}}' method="POST" >
            {{ csrf_field() }}
          <div class="input-group">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </div>
              <div class="input-group"> 
                   <input type="search" class="form-control" name="recherche">
                   <span class="input-group-prepend">
                      <button type="submit" class="btn btn-primary">recherche</button>
                  </span>
              </div>    
    </form>
</div>    
<br>
<div class="content ">           
        @if (count($posts)>0)
        <div class="grid-container1">
        @foreach ($posts as $post)
        <!-- Card -->
        
            <div class="card" style="width: 35rem;" >
                <h2 class="card-title text-center"><a href="/posts/{{$post->id}}"><strong>{{$post->titre}}</strong></a></h2>
                <!-- Card image -->
                
                {{-- <img class="card-img-top" width="500px" height="200px" src="/storage/cover_images/ﻣﺘﻄﻮﻉ-arb.png" alt="Card image cap"> --}}
                <img class="card-img-top" width="500px" height="200px" src="/storage/cover_images/{{$post->cover_image}} " alt="Card image cap">

                <!-- Card content -->
               <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <a href="/posts/{{$post->id}}" class="black-text d-flex justify-content-end"><h5>Read more <i class="fas fa-angle-double-right"></i></h5></a>
                </div>
            </div>
        @endforeach  
        </div>
        @else
        <h1> No event found  '_' </h1>
        @endif

</div>



<style>
 h2 {
    color: #177bc0;
    font-size: 2.25em;
}

</style>




@endsection

