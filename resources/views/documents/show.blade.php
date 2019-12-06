@extends('layouts.app')
@section('content')
<br><br><br><br><br>
<h1> show</h1><br>

<div class="content ">           
        @if (count($downloads )>0)
        
        @foreach ($downloads  as $down)
                <table>
                   <tr>
                        <td><label for="text">titre :{{$down->titre}}</label> </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="text">file :{{$down->file}}</label>
                            <a href="storage/files/{{$down->file}}" download="{{$down->file}}">
								<button type="button" class="btn btn-primary">
								<i class="glyphicon glyphicon-download">
									Download
								</i>
								</button>
                            </a>
                         </td>
                    </tr>
                </table>
               
               
                {{-- <img src="/storage/files/{{$document->file}}" width="50%" height="50%" > --}}

        @endforeach  
     
        @else
        <h1> No event found  '_' </h1>
        @endif

</div>






@endsection

