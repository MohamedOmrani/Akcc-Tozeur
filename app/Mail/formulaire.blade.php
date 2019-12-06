
@extends('layouts.app')

@section('content')
<br>
<br>
<form action="/testMail" method="POST">
    <div class="form-group">
        <label for="email"><h3>Email Reciever </h3> </label>
        <input type="email" class="form-control" name="mailinput" id="email"  placeholder="Enter email">
    </div>

    <div class="form-group">
      <label for="subject"><h3>Subject</h3></label>
      <input type="text" class="form-control" id="subject"  name="subject" placeholder="Subject">
    </div>

    <div class="form-group">
      <label for="body"><h3>Body</h3></label>
      <textarea type="text" class="form-control" id="body"  name="body" placeholder="Body" rows="6"></textarea>
    </div>
    <div class="form-group">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection