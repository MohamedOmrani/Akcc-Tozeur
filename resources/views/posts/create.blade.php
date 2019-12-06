@extends('layouts.bb')

@section('content')
<br><br><br><br><br><br><br>
<div class=" text-center mb-2"><h1> Create  La campagne d'octobre</h1>  </div>
<form action="{{ URL::route('posts.store') }}"  method="POST" enctype="multipart/form-data" class="dropzone" id="dropzone">
        <h5 class=" text-muted mb-3" >Titre</h5> 
        <div class="form-group  ">
        <input class="input1" type="text" name="titre" id="titre" placeholder="titre">
        <span class="shadow-input1"></span>
        </div> 

        <div class="form-group">
        <h5 class=" text-muted mb-3" >Body</h5> 
        <textarea class="input1" name="body" type="text" id="body" rows="10" placeholder="body"></textarea>
        <span class="shadow-input1"></span>
        </div>
 

        <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>

        <div class="container-contact1-form-btn mb-5"  > 
        <button class="contact1-form-btn" type="submit">
                <span>
                Send 
                 <i class="fas fa-location-arrow" aria-hidden="true"></i>
                </span>
        </button> 
        </div>
</form>
<script type="text/javascript">
    Dropzone.options.dropzone =
        {
            maxFilesize: 12,
            renameFile: function (file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function (file) {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ url("delete") }}',
                    data: {filename: name},
                    success: function (data) {
                        console.log("File has been successfully removed!!");
                    },
                    error: function (e) {
                        console.log(e);
                    }
                });
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            success: function (file, response) {
                console.log(response);
            },
            error: function (file, response) {
                return false;
            }
        };
</script>


@endsection