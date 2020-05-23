@extends('layouts.app')

@section('content')
<div class="row">
  @foreach($home as $home)
  <div class="col">
  </div>
  <div class="col-sm-10">

    <!-- Jumbotron -->
<div class="jumbotron text-center">

  <!-- Title -->
  <h4 class="card-title h4 pb-2"><strong>ASOCAMCAY</strong></h4>

  <!-- Card image -->
  <section>
    @if ($home->homeimg1 != null or $home->homeimg2 != null or $home->homeimg3 != null or $home->homeimg4 != null or $home->homeimg5 != null)
    <div class="view overlay my-4">
    <!--Carousel Wrapper-->

    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    
    @if($home->homeimg1!=null)<li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>@endif
    @if($home->homeimg2!=null)<li data-target="#carousel-example-2" data-slide-to="1"></li>@endif
    @if($home->homeimg3!=null)<li data-target="#carousel-example-2" data-slide-to="2"></li>@endif
    @if($home->homeimg4!=null)<li data-target="#carousel-example-2" data-slide-to="3"></li>@endif
    @if($home->homeimg5!=null)<li data-target="#carousel-example-2" data-slide-to="4"></li>@endif
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    @if($home->homeimg1!=null)
    <div class="carousel-item active">
      <div class="view ">
        <img class="d-block mx-auto text-center " src="/imagenes/home/{{$home->homeimg1}}" alt="1er slide">
        <div class="mask rgba-black-slight"></div>
      </div>
    </div>
@endif
@if($home->homeimg2!=null)
    <div class="carousel-item">
      <div class="view">
        <img class="d-block mx-auto text-center" src="/imagenes/home/{{$home->homeimg2}}"  alt="2do slide">
        <div class="mask rgba-black-slight"></div>
      </div>
    </div>
    @endif
    @if($home->homeimg3!=null)
    <div class="carousel-item">
      <div class="view ">
        <img class="d-block mx-auto text-center" src="/imagenes/home/{{$home->homeimg3}}"  alt="3ro slide">
        <div class="mask rgba-black-slight"></div>
      </div>
    </div>
    @endif
    @if($home->homeimg4!=null)
    <div class="carousel-item">
      <div class="view">
        <img class="d-block mx-auto text-center" src="/imagenes/home/{{$home->homeimg4}}"  alt="4to slide">
        <div class="mask rgba-black-slight"></div>
      </div>
    </div>
    @endif
    @if($home->homeimg5!=null)
    <div class="carousel-item">
      <div class="view">
        <img class="d-block mx-auto text-center" src="/imagenes/home/{{$home->homeimg5}}"  alt="5to slide">
        <div class="mask rgba-black-slight"></div>
      </div>
    </div>
    @endif
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>

  </div>
<!--/.Carousel Wrapper-->
@endif 
</section>  
<section>
  


  <h5 class="indigo-text h5 mb-4">Asociación Agroecológica la Campesina de Cayambe</h5>
  <div class="row">
    <div class="col"></div>
    <div class="col-sm-6">
      <p class="d-flex justify-content-center card-text text-justify">{{$home->homedesc}}</p>
    </div>
    <div class="col"></div>
  </div>
  
  <a class="fa-lg p-2 m-2 li-ic"><i class="fab fa-linkedin-in grey-text"></i></a>
  <a class="fa-lg p-2 m-2 tw-ic"><i class="fab fa-twitter grey-text"></i></a>
  <a class="fa-lg p-2 m-2 fb-ic"><i class="fab fa-facebook-f grey-text"></i></a>
   
</section>
<section id="contact">
  <div class="container my-5">
    <h3 class="indigo-text h3 mb-4 ">Contactos</h3>
    <div class="row justify-content-md-center">
      
      <div class='col col-sm-3'>
        <i class="fas fa-map-marker-alt  mt-4 fa-2x"></i>
          <p>{{$home->homedir}}</p>
      
        
      </div>
      <div class='col-sm-3'>
        <i class="fas fa-phone mt-4 fa-2x"></i>
          <p>{{$home->hometelf}}</p>
      
        
      </div>
      <div class='col col-sm-3'>
        <i class="fas fa-envelope mt-4 fa-2x"></i>
          <p>{{$home->homeemail}}</p>
      
      </div>
   
    </div>
    
  </div>
  <div class="row justify-content-md-center" >
    
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5249.412687018164!2d-78.14491837496018!3d0.04603242733610218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2a08efff110043%3A0x9fbe7fe7a62fd1f3!2sCAPILLA%20SALESIANA!5e0!3m2!1ses!2sec!4v1589967997629!5m2!1ses!2sec" width="450" height="350" class="d-block" frameborder="0" style="border:0;" aria-hidden="false" tabindex="0" allowfullscreen></iframe>   
  </div>
</section>
</div>

  </div>
  
<div class="col">
</div>


</div>
@endforeach 
</div>



    @endsection
