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
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Light mask</h3>
        <p>First text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Strong mask</h3>
        <p>Secondary text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Slight mask</h3>
        <p>Third text</p>
      </div>
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
<!--/.Carousel Wrapper-->
  </div>
  <h5 class="indigo-text h5 mb-4">Asociación Agroecológica la Campesina de Cayambe</h5>
  <p class="card-text text-justify">Esta organización con el Apoyo de la Fundación Casa Campesina Cayambe, se dedica básicamente a la producción y comercialización de productos agropecuarios con enfoque agroecológico, luchando permanentemente por concretar un sistema con características de sostenibilidad en los ámbitos social, económico y ambiental.</p>
  <a class="fa-lg p-2 m-2 li-ic"><i class="fab fa-linkedin-in grey-text"></i></a>
  <a class="fa-lg p-2 m-2 tw-ic"><i class="fab fa-twitter grey-text"></i></a>
  <a class="fa-lg p-2 m-2 fb-ic"><i class="fab fa-facebook-f grey-text"></i></a>

  <div class="row mt-5 pt-4" id="contact">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <section class="mb-4" >
            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contactanos</h2>
            <!--Section description-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Nombre</label>
                                </div>
                            </div>
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Email</label>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Asunto</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">Tu mensaje</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
                    </form>
        
                    <div class="text-center text-md-left">
                        <a class="btn btn-primary btn-block" onclick="document.getElementById('contact-form').submit();">Enviar</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->
                <div class="col-md-3 text-center">
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
    <div class="col-md-2">
      
    </div>
  </div>
</div>

  </div>
  
<div class="col">
</div>


</div>
</div>



    @endsection
