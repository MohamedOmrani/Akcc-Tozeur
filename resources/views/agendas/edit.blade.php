@extends('layouts.bb')

@section('content')
<br><br><br><br><br>
<div class=" text mb-2"><h1> <i class="fas fa-edit mb-5"></i> Editer Agenda</h1>  </div>
<form action="/agendas/{{$agenda->id}}" method="POST"enctype="multipart/form-data">
        <div class="form-group">
                <h5 class=" text-muted mb-3" >Calendrier </h5> 
                        <input name="datepicker" data-format="yyyy-mm-dd" value="{{$agenda->datepicker}}" id='datepicker' >
                        <script>
                                $('#datepicker').datepicker({
                                uiLibrary: 'bootstrap4'
                                });
                        </script>
                </div>   
                <h5 class=" text-muted mb-3" >Temps</h5> 
                <div class="form-group">  
                                <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                        <input type="text"  name="datetimepicker" id="datetimepicker" value="{{$agenda->datetimepicker}}" class="form-control datetimepicker-input"  data-target="#datetimepicker3"/>
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
                        <input type="text" name="titre" id='titre' value="{{$agenda->titre}}" class="form-control" placeholder="titre">
                        <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-paint-brush"></i></span>
                        </div>
                </div>
                <h5 class=" text-muted mb-3" >Localisation</h5> 
                <div class="input-group mb-3">
                        <input type="text" name="lieu"  id='lieu' value="{{$agenda->lieu}}" class="form-control" placeholder="Lieu">
                        <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-map-marker-alt"></i></span>
                        </div>
                        </div>
                
                        <div class="form-group">
                                <h5 class=" text-muted mb-3" >Body</h5> 
                        <textarea class="form-control" name="body" value="{{$agenda->body}}" type="text" id="body" rows="10" placeholder="body"></textarea>
                        </div>
        <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">
        </div>
        <div class="custom-file mb-5">
                <input type="file" class="custom-file-input" value="{{$agenda->cover_image}}" id="cover_image" name="cover_image" lang="es">
                <label class="custom-file-label"  placeholder="cover_image" for="customFileLang"></label>
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