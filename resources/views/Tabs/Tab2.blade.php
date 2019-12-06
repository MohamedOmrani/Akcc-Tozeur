
<section class="panel panel-primary">
    <h3>Communiqués de Presse</h3>
      
              
              
    <table class="table table-hover">

      <thead>
          
        <tr>
          <th>Intitulé du communiqué</th>
          <th>Date de publication</th>
        </tr>

      </thead>
      
                  
        <tbody>
                @if (count($communique_de_presses)>0)
                @foreach($communique_de_presses as $communique_de_presse)
                <tr>
          <td>{{$communique_de_presse->titre}}</td>
          <td>15 août 2017</td>
        </tr>

       @endforeach
            @else
            <h1> No Documents found  '_' </h1>
            @endif
    </tbody></table>
</section>

<script src="{{ asset('js/Managers/Tab2Manager.js') }}"></script>