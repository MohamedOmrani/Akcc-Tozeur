@extends('layouts.bb')
 
@section('content')
<br><br><br><br><br>
{{-- <div class=" text-center mb-2"> <i class="fas fa-file-signature"></i><h1> Create documents</h1>  </div> --}}
<h1><i class="fas fa-file-signature mb-5"></i> Create documents</h1>  
<form action="{{ URL::route('documents.store') }}" method="POST"   enctype="multipart/form-data" >
        <h5 class=" text-muted mb-3" >Nom du document</h5> 
        <div class="input-group mb-3">
                <input type="text" name="titre" id='titre' class="form-control" placeholder="Nom du document">
                <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2"><i class="fas fa-paint-brush"></i></span>
                </div>
        </div>
        <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
        {{-- <div class="form-group">
         <label for="upload_file" class="control-label col-sm-3">Upload File</label>
        <div class="col-sm-9">
                 <input class="form-control" value="file" type="file" name="file" id="file">
         </div>
        </div> --}}
        <h5 class=" text-muted mb-3" >Upload Documents</h5> 
        <div class="custom-file mb-5">
                <input type="file" class="custom-file-input" value="file" id="file" name="file" lang="es">
                <label class="custom-file-label"  placeholder="cover_image" for="customFileLang"></label>
        </div>
        <div class="container-contact1-form-btn mb-5"  >
        <button class="contact1-form-btn" type="submit">
                <span>
                Send 
                <i class="fas fa-location-arrow" aria-hidden="true"></i>
                </span>
        </button> 
        </div>

</form>

@endsection