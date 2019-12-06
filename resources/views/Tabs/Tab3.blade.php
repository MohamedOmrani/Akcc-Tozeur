<section class="panel panel-primary">

    <h3>medias</h3>
      
              
              
    <table class="table table-hover">

      <thead>
          
        <tr>
          <th>Intitulé du communiqué</th>
          <th>Date de publication</th>
        </tr>

      </thead>
      
                  
        <tbody>
                @if (count($mediass)>0)
                @foreach($mediass as $medias)
                <tr>
         
          <td><a href="{{$medias->body}}">{{$medias->titre}}</a></td>
                        <td><i class="fas fa-calendar mr-2"></i>{{$medias->datepicker}}</a></td>

        </tr>

       @endforeach
            @else
            <h1> No Documents found  '_' </h1>
            @endif
</section>
<script src="{{ asset('js/Managers/Tab3Manager.js') }}"></script>