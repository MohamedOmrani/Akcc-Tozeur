kkkkkkkkkkkkkk
<div class="content ">           
    @if (count($image_uploads)>0)
 
    @foreach ($image_uploads as $imageUpload)

    
            <h2 class="card-title text-center"><strong>{{$imageUpload->filename}}</strong></a></h2>
     

            <img class="card-img-top" width="500px" height="200px" src="/storage/cover_images/{{$imageUpload->filename}} " alt="Card image cap">

         

    
    @endforeach  

    @else
    <h1> No event found  '_' </h1>
    @endif

</div>
