@extends('layouts.app')

@section('content')
<br><br><br><br><br>
<h1> Edit post</h1>
<form action="/posts/{{$post->id}}" method="POST"enctype="multipart/form-data">
        <div class="form-group">
          <label >Title</label>
        <input type="text" name="titre" class="form-control" placeholder="titre" value="{{$post->titre}}">
          
        </div>
        <div class="form-group">
            <label >body</label>
            <textarea class="form-control" name="body" type="text" id="body" rows="10" placeholder="body" value="{{$post->body}}"></textarea>
    </div>
        <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">
        </div>
        <div class="form-group">
            <input type="file" name="cover_image" class="form-control" placeholder="cover_image" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection