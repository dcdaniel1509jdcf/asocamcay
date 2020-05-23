@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-1 ">

   
    <h3 class="indigo-text h3 text-center">Recetas</h3>
    @if ($recipe->isEmpty())
    <article class="article">
      <h4 class="h4 text-center indigo-text">No Disponibles</h4>
    </article>
    @endif 

  <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

    @foreach ($recipe as $recipe)
  
  <div class="list-group">

    
    <div class="list-group-item  rounded-top  bordered mdb-color darken-3 " role="tab" id="headingOne1">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1{{$recipe->id}}" aria-expanded="true"
        aria-controls="collapseOne1{{$recipe->id}}">
        <h6 class="h6 text-center indigo-text white-text">
          <strong>{{$recipe->name}}</strong>  <i class="fas fa-angle-down rotate-icon "></i>
        </h6>
      </a>
    </div>

 
    <div id="collapseOne1{{$recipe->id}}" class="collapse " role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
      <div class=" card z-depth-0 bordered">
        <div class="my-1 p-0 ">

          <!-- Card image -->
          <div class="view rounded-top text-center">
            <img src="/imagenes/productos/{{$recipe->image}}" class="img-fluid mx-auto d-block rounded mb-0" alt="Sample image">
          </div>
        
          <!-- Card content -->
          <div class=" my-2">
        
            <!-- Title -->
            <h3 class="indigo-text h3 text-center text-uppercase"> {{$recipe->name}}</h3>
            <!-- Text -->
            <p class="card-text py-2">
              <div class="container">
                <div class="row">
                  <div class="col"></div>
                  <div class="col-sm-4">
                    <h6 class="indigo-text h6  text-uppercase">Ingredientes</h6> 
                    <p class="text-justify ">
                      <?php 
                      echo nl2br($recipe->ingredients);
                      ?>
                    </p>
                  </div>
                  <div class="col-sm-6">
                    <h6 class="indigo-text h6  text-uppercase">Instrucciones</h6> 
                    <p class="text-justify"> <?php 
                      echo nl2br($recipe->description);
                      ?></p>
                  
                  </div>
                  <div class="col"></div>
                </div>
                
                  
               
                    
             
              </div>
            </p>
            
           
        
          </div>
        
        </div>
      </div>

    </div>

  </div>
  
  @endforeach



</div>



  </div>

  


@endsection