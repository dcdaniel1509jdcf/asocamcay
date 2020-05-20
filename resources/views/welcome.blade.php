@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col">
  </div>
  <div class="col-sm-10">

    <!-- Jumbotron -->
<div class="jumbotron text-center">

  <!-- Title -->
  <h4 class="card-title h4 pb-2"><strong>ASOCAMCAY</strong></h4>

  <!-- Card image -->
  <section>
  <div class="view overlay my-4">
    <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block " src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <
    </div>
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
</section>  
<section>
  <h5 class="indigo-text h5 mb-4">Asociación Agroecológica la Campesina de Cayambe</h5>
  <p class="card-text text-justify">Esta organización con el Apoyo de la Fundación Casa Campesina Cayambe, se dedica básicamente a la producción y comercialización de productos agropecuarios con enfoque agroecológico, luchando permanentemente por concretar un sistema con características de sostenibilidad en los ámbitos social, económico y ambiental.</p>
  <a class="fa-lg p-2 m-2 li-ic"><i class="fab fa-linkedin-in grey-text"></i></a>
  <a class="fa-lg p-2 m-2 tw-ic"><i class="fab fa-twitter grey-text"></i></a>
  <a class="fa-lg p-2 m-2 fb-ic"><i class="fab fa-facebook-f grey-text"></i></a>
  </section>
  <div class="row mt-5 pt-4" id="contact">
    
    <div class="col-md-12">
        <section class="mb-4" >
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contactanos</h2>
            <div class="row">
              
                <div class="col-md-8 text-center">
                  <div class="z-depth-1-half map-container "style="width:600px" >
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5249.412687018164!2d-78.14491837496018!3d0.04603242733610218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2a08efff110043%3A0x9fbe7fe7a62fd1f3!2sCAPILLA%20SALESIANA!5e0!3m2!1ses!2sec!4v1589967997629!5m2!1ses!2sec" width="600" height="450" frameborder="0" style="border:0;" aria-hidden="false" tabindex="0" allowfullscreen></iframe> 
                </div>
                </div>
                <div class="col-md-4 border-left text-center mb-4">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Cayambe,Pichincha</p>
                        </li>
        
                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+593 98 268 9672</p>
                        </li>
        
                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>asocamcay@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
        </section>
    </div>
    <div class="col">
      
    </div>
  </div>
</div>

  </div>
  
<div class="col">
</div>


</div>
</div>



    @endsection
