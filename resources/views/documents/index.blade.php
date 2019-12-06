@extends('layouts.bb')
@section('content')
<br><br><br><br><br>
<div class=" text">
    <br>
    {{-- <section class="panel panel-primary"> --}}
        {{-- <div class="panel-heading"> --}}
               
                <h1><i class="fas fa-list-ul mb-2"></i> Supports de communication</h1> 
        {{-- </div> --}}
        {{-- <div class="panel-body"> --}}
            <br>
            <table class="table">
             @if (count($documents)>0)
                @foreach($documents as $document)
                    <tr>
                        <td>
                            <i class="fas fa-file-alt"style="font-size:22px;"></i>
                        </td>
                        <td>
                            {{$document->titre}}
                        </td>
                        <td>
                            <a href="storage/files/{{$document->file}}" download="{{$document->file}}">
                                <i class="fas fa-download"style="font-size:20px;"></i>
                            </a>   
                        </td>
                        <td> 
                            <a href="storage/files/{{$document->file}}">
                            <i class="fas fa-eye"style="font-size:20px;"></i>
                            </a>
                        </td>
                        <td>
                             <a href ="/documents/{{$document->id}}/edit" class ="btn btn-primary">
                                 <i class="fas fa-edit"></i>
                                 Edit
                            </a>
                        </td>
                        <td>               
                            <form action="/documents/{{$document->id}}" method="POST">
                                
                                <button type="submit" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                    Delete
                                </button>
                                <div class="form-group">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="Delete">
                                </div>
                            
                            </form>
                        </td>
                    </tr>
                @endforeach
                @else
                <h1> No Documents found  '_' </h1>
                @endif
            </table>
   
    {{-- </section> --}}
{{-- </div> --}}








@endsection

