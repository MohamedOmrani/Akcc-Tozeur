@extends('layouts.bb')

@section('content')
<br><br><br><br><br>
    <a href ="/posts" class ="btn btn-info">Back</a>

<div class="card" >

        <!-- Card image -->
        <h4 class="card-title text-center"><strong>{{$post->titre}}</strong></h4>
          <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}"  alt="Card image cap">
          {{-- <img class="card-img-top" src="/storage/cover_images/ﻣﺘﻄﻮﻉ-arb.png" height="300px" alt="Card image cap"> --}}
        <!-- Card content -->
        <div class="card-body card-body-cascade ">
          <!-- Text -->
          <p class="card-text">{{$post->body}}</p>
        </div>
      
      </div>
      <!-- Card -->

    <hr>
            <a href ="/posts/{{$post->id}}/edit" class ="btn btn-primary">Edit</a>
            <form action="/posts/{{$post->id}}" method="POST">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="Delete">
                </div>
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>

@endsection

