@extends('layouts.bb')
@section('content')
<br><br><br><br><br>
<div class="wrapper">
    <section class="panel panel-primary">
        <div class="panel-heading">
        <h1>medias</h1>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <th>Intitulé du communiqué</th>
                    <th>Date de publication</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
       
                @foreach($mediass as $medias)
                    <tr>
                        
                        <td><a href="{{$medias->body}}">{{$medias->titre}}</a></td>
                        <td><i class="fas fa-calendar mr-2"></i>{{$medias->datepicker}}</a></td>

                    </tr>
                @endforeach
               
                </tbody>
            </table>
        </div>
    </section>

   
</div>
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
<script src="{{ asset('js/Managers/MainManager.js') }}"></script>

@endsection
 
