@extends('layouts.app')

@section('content')

<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
  
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="http://www.unilatina.edu.co/blog/wp-content/uploads/2018/08/beneficios-de-las-frutas.jpg" alt="Los Angeles" width="100%" height="500" >
      </div>
      <div class="carousel-item">
        <img src="https://nit.pt/wp-content/uploads/2018/07/9e5ed59d87cd939c3fec4c06071ce66a-754x394.jpg" alt="Chicago" width="100%" height="500" >
      </div>
      <div class="carousel-item">
        <img src="https://jornaleconomico.sapo.pt/wp-content/uploads/2016/11/frutas.jpg?w=610&h=381&q=60&compress=auto,format&fit=crop" alt="New York"  width="100%" height="500">
      </div>
    </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  
  </div>
<div class="jumbotron p-4 p-md-5 text-white rounded bg-white">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic text-body">ASOCAMCAY</h1>
      <p class="lead my-3 text-body">Asociación Agroecológica la Campesina de Cayambe.</p>
      <p class="lead mb-0 text-body  text-justify">Esta organización con el Apoyo de la Fundación Casa Campesina Cayambe, se dedica básicamente a la producción y comercialización de productos agropecuarios con enfoque agroecológico, luchando permanentemente por concretar un sistema con características de sostenibilidad en los ámbitos social, económico y ambiental.</p>
    </div>
  </div>

  <!-- Jumbotron -->
  <section class="mt-5 pt-4" id="vision" hidden>
<div class="card card-image"  style="background-image: url(https://mdbootstrap.com/img/Photos/Others/forest2.jpg);">
  <div class="text-white text-center rgba-stylish-strong py-5 px-4">
    <div class="py-5">

      <!-- Content -->
      <h5 class="h5 orange-text"><i class="fas fa-camera-retro"></i> Vision</h5>
      <h2 class="card-title h2 my-4 py-2"></h2>
      <p class="mb-4 pb-2 px-md-5 mx-md-5"></p>
      <a class="btn peach-gradient"><i class="fas fa-clone left"></i></a>

    </div>
  </div>
</div>
  </section>
<section class="mt-5 pt-4" id="mision" hidden>

    <h3 class="h3 text-center mb-5">Mision</h3>

    <!--Grid row-->
    <div class="row wow fadeIn" hidden>

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 px-4">

        <!--First row-->
        <div class="row" hidden>
          <div class="col-1 mr-3">
            <i class="fas fa-code fa-2x indigo-text"></i>
          </div>
          <div class="col-10">
            <h5 class="feature-title"></h5>
            <p class="grey-text">Descripcion</p>
          </div>
        </div>
        <!--/First row-->

        
       
      </div>
     
      <!--Grid column-->
      <div class="col-lg-6 col-md-12" hidden>
        <p class="h5 text-center mb-4">Video / Imagen</p>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>

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
      <!--Section: Contact v.2-->
  </div>
  <div class="col-md-2">
    
  </div>
</div>



    @endsection
