@extends('layouts.bb')

@section('content')
<br><br><br><br><br><br><br> 
<div class=" text-center mb-2"><h1> Create Agenda</h1>  </div>


<form action="{{ URL::route('agendas.store') }}" method="POST"   enctype="multipart/form-data" >
        <div class="form-group">
        <h5 class=" text-muted mb-3" >Calendrier </h5> 
         <input name="datepicker" data-format="yyyy-mm-dd" id='datepicker' >
                <script>
                        $('#datepicker').datepicker({
                        uiLibrary: 'bootstrap4'
                        }); 
                </script>
        </div>   
        <h5 class=" text-muted mb-3" >Temps</h5> 
        <div class="form-group">  
                        <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                <input type="text"  name="datetimepicker" id="datetimepicker" class="form-control datetimepicker-input"  data-target="#datetimepicker3"/>
                                <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                 <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                                </div>
                        </div>
                <script type="text/javascript">        
                         $('#datetimepicker3').datetimepicker({
                         format: 'LT',
                         pickDate: false
                        });                       
                </script>                              
        </div> 
        
        <h5 class=" text-muted mb-3" >Titre</h5> 
        
        <div class="input-group mb-3">
                <input type="text" name="titre" id='titre' class="form-control" placeholder="titre">
                <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2"><i class="fas fa-paint-brush"></i></span>
                </div>
        </div>
        <h5 class=" text-muted mb-3" >Localisation</h5> 
        <div class="input-group mb-3">
                <input type="text" name="lieu"  id='lieu' class="form-control" placeholder="Lieu">
                <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2"><i class="fas fa-map-marker-alt"></i></span>
                </div>
        </div>

        <div class="form-group">
                <h5 class=" text-muted mb-3" >Body</h5> 
        <textarea class="form-control" name="body" type="text" id="body" rows="10" placeholder="body"></textarea>
        </div>
        <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
        {{-- <div class="form-group">
           <input type="file" value="cover_image" name="cover_image" class="form-control" placeholder="cover_image" id="cover_image" >
        </div>  --}}
        {{-- <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                  <input type="file" value="cover_image"class="custom-file-input" name="cover_image"placeholder="cover_image" id="cover_image" >
                  <label class="custom-file-label" placeholder="cover_image"  for="inputGroupFile01">Choose file</label>
                </div>
              </div> --}}
              <h5 class=" text-muted mb-3" >Upload Image</h5> 
              <div class="custom-file mb-5">
                        <input type="file" class="custom-file-input" value="cover_image" id="cover_image" name="cover_image" lang="es">
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



