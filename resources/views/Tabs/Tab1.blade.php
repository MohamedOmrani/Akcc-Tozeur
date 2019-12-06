{{-- <p id="p1-content">tab1</p> --}}
    <section class="panel panel-primary">
        <div class="panel-heading">
        <h1>Revue de Presse</h1>
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
             @if (count($presses)>0)
                @foreach($presses as $presse)
                    <tr>
                        <td><a href="{{$presse->body}}">{{$presse->titre}}</a></td>
                        <td><i class="fas fa-calendar mr-2"></i>{{$presse->datepicker}}</a></td>

                        <td>
                            <a href ="/presses/{{$presse->id}}/edit" class ="btn btn-primary">Edit</a>
                        </td>
                        <td>               
                            <form action="/presses/{{$presse->id}}" method="POST">
                                
                                <button type="submit" class="btn btn-danger">Delete</button>
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
                </tbody>
            </table>
        </div>
    </section>
<script src="{{ asset('js/Managers/Tab1Manager.js') }}"></script> 