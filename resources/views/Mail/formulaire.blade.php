@extends('layouts.bb')

@section('content') 
<br><br><br><br><br> 
<div class="col-md-12">
  <h4><i class="fa fa-map-marker"></i> Location Map</h4>
  <br>
  <div style="width: 100%"><iframe width="1100" height="350" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Create route map</a>
  </iframe>
</div>
  <br>
</div>
<div class="row">
<div class="col-sm-6">
    <h2>Comment pouvons-nous vous aider ?</h2>
    N’hésitez pas à poser une question ou à simplement laisser un commentaire.
<br><br>
<form action="/testMail" method="POST">
  
  <div class="form-group text-muted ">
     <input class="input1" type="text" name="Nom" id="Nom"  placeholder="Nom">
     <span class="shadow-input1"></span>
   </div>   
   <div class="form-group text-muted ">
       <input class="input1" type="text" name="mailinput" id="email"  placeholder="email">
       <span class="shadow-input1"></span>
   </div>

   <div class="form-group text-muted ">
     <input class="input1" type="text" name="subject" id="subject"  placeholder="Phone">
     <span class="shadow-input1"></span>
   </div>

   <div class="form-group text-muted ">
     <textarea class="input1" name="Body"id="body" placeholder="Message"></textarea>
     <span class="shadow-input1"></span>
   </div>
   <div class="form-group text-muted">
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
   </div>
   <div class="container-contact1-form-btn mb-5"  >
    <button class="contact1-form-btn" type="submit">
      <span>
        Send Email
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      </span>
    </button> 
  </div>
</form>

</div>
<div class="col-sm-6">      
        <div class="col-lg-10 contacts dark">
          <div class="p20">

              <h4><i class="fa fa-envelope"></i> Contact Details</h4>
                  <br>
                    <address>
                      <i class="fa fa-map-marker"></i>
                      <strong>Address:</strong><br>
                      Al Mathar Al Shamali  - Prince Turki Ibn Abdulaziz Al Awwal Rd, Riyadh 12721
                  </address>
                   <p>
                      <i class="fa fa-phone"></i>
                      <strong>Phone:</strong><br>
                      <span dir="ltr">011-4833652</span>
                  </p>
                  <br>
                  <p>
                      <i class="fa fa-fax"></i>
                      <strong>Fax:</strong><br>
                      <span dir="ltr">011-2812841</span>
                  </p>
                  <br>
                   <p>
                      <i class="fa fa-envelope"></i>
                      <strong>Email:</strong><br>
                      info@zahra.org.sa
                  </p>
                  <br>
                  <p>
                      <i class="fa fa-clock-o"></i>
                      <strong>Working Times:</strong><br>
                      Sunday to Thursday 08:00 AM to 04:00 PM
                  </p>
              </div>
      </div>
    </div>
</div>


<style>
  .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 14px 60px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 12px;
  }
  </style>
  <!--===============================================================================================-->
{{-- 
<script src="{{ asset('contact/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->

<script src="{{ asset('contact/vendor/bootstrap/js/popper.js') }}"></script>

<script src="{{ asset('contact/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->

<script src="{{ asset('contact/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->

<script src="{{ asset('contact/vendor/tilt/tilt.jquery.min.js') }}"></script>
<script >
  $('.js-tilt').tilt({
    scale: 1.1
  })
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-23581568-13'
);
</script>

<!--===============================================================================================-->

<script src="{{ asset('contact/"js/main.js') }}"></script> --}}
@endsection
