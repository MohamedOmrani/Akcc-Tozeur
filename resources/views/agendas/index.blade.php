@extends('layouts.bb')
@section('content')
<br><br><br><br><br>
<h1><i class="fas fa-calendar-alt mb-5"></i> Agenda</h1>  
<br> 
<div class="content ">           
        @if (count($agendas)>0)
        <div class="grid-container">
        @foreach ($agendas as $agenda)
        <!-- Card -->
            <div class="card" style="width: 23rem; height: 25rem;" >
                        <!-- Card image -->
                        <img  class="card-img-top"  src="/storage/cover_images/{{$agenda->cover_image}} " alt="Card image cap">                     
                            <button class="contact1-form-btn">
                                <span>
                              <i class="fas fa-calendar mr-2"aria-hidden="true"></i>{{$agenda->datepicker}}
                                </span>
                              </button> 
                        <!-- Card content --> 
                    <div class="card-body ">
                        <!-- Title -->
                        <h4 class="card-title text-center"><a href="/agendas/{{$agenda->id}}">{{$agenda->titre}}</a></h4>
                        <!-- Text -->
                        <p class="card-text">
                            
                            <small><i class="fa fa-clock-o"></i>  à partir de : {{$agenda->datetimepicker}}</small>
                            <br>
                            <small><i class="fas fa-map-marker-alt"></i> Localisation : {{$agenda->lieu}}</small>
                        </p>             
                    </div>
            </div>           
  <!-- Card -->
        @endforeach  
        </div>
        @else
        <h1> No event found  '_' </h1>
        @endif

</div>
<style>


.contact1-form-btn {
  border-radius: 5px;
  background: #d11f3f 	 ; 
  /* background: ##4169E1 	 ; */
  padding: 14px 70px;
  text-align: center;
}
.contact1-form-btn:hover {
  background:  #696969;
}

</style>

@endsection




