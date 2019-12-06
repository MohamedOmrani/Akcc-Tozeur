@extends('layouts.bb')
@section('content')
<br><br><br><br><br>

  <h1>Liste des Voilentaires</h1>
  <hr class="new5">


{{-- <div class="content">
      <form action='{{url("/search")}}' method="POST" >
              {{ csrf_field() }}
            <div class="input-group">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
                <div class="input-group">
                     <input type="search" class="form-control" name="search">
                     <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">search</button>
                    </span>
                 </div>    
       </form>
</div> --}}
<div class="form-group">
  <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
 </div>

@if (count($adds)>0)
<div class="list-group">
    <table class="table table-hover">
              <tr>
                
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Email address</th>
                <th scope="col">Phone</th>
                <th scope="col">City</th>
                <th scope="col">Function and place of work</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>   
    @foreach ($adds as $add)
                 <tr>
                      <td>{{$add->lastname}}</td>
                      <td>{{$add->firstname}}</td>
                      <td>{{$add->mailinput}}</td>
                      <td>{{$add->Tel}}</td>
                      <td>{{$add->city}}</td>
                      <td>{{$add->Job}}</td>
                      <td> <a href ="/adds/{{$add->id}}/edit" class ="btn btn-primary">Edit</a></td>
                      <form action="/adds/{{$add->id}}" method="POST">
                              <div class="form-group">
                                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                   <input type="hidden" name="_method" value="Delete">
                              </div>
                       <td>
                          <button type="submit" class="btn btn-danger">Delete</button>
                       </td>
                       </form>
                  </tr>
      
    @endforeach  
  </table>
    {{$adds->links()}}
  </div>  
@else
    <h1> No posts found  '_'</h1>
@endif
<style>
    hr.new5 {
    border: 5px solid green;
    border-radius: 5px;
    width:50%;
  }
  </style>
  <script>
    $(document).ready(function(){
    
     fetch_customer_data();
    
     function fetch_customer_data(query = '')
     {
      $.ajax({
       url:"{{ route('adds.action') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       success:function(data)
       {
        $('tbody').html(data.table_data);
        $('#total_records').text(data.total_data);
       }
      })
     }
    
     $(document).on('keyup', '#search', function(){
      var query = $(this).val();
      fetch_customer_data(query);
     });
    });
    </script>
@endsection
