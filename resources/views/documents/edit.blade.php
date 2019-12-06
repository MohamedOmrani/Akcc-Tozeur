@extends('layouts.bb')

@section('content')
<br><br><br><br><br>
<h1><i class="fas fa-edit mb-5"></i> Edit document</h1>
<form action="/documents/{{$document->id}}" method="POST"enctype="multipart/form-data">
  {{-- <div class="form-group">
    <label >Title</label>
  <input type="text" name="titre" class="form-control" placeholder="titre" value="{{$document->titre}}">
  </div> --}}
  <h5 class=" text-muted mb-3" >Nom du document </h5>       
    <div class="input-group mb-3">
            <input type="text" name="titre" id='titre' value="{{$document->titre}}" class="form-control" placeholder="Nom du document">
            <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2"><i class="fas fa-paint-brush"></i></span>
            </div>
    </div>
  <div class="form-group">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="_method" value="PUT">
  </div>
  {{-- <div class="form-group">
    <input type="file" name="file" class="form-control" placeholder="file" id="file">
</div> --}}
<h5 class=" text-muted mb-3" >Upload Documents</h5> 
 <div class="custom-file mb-5">
        <input type="file" class="custom-file-input" id="file" name="file">
        <label class="custom-file-label"  placeholder="file" for="customFileLang"></label>
  </div>

<div class="container-contact1-form-btn mb-5"  >
    <button class="contact1-form-btn" type="submit">
            <span>
            Edit 
            <i class="fas fa-location-arrow" aria-hidden="true"></i>
            </span>
    </button> 
</div>
</form>

@endsection  