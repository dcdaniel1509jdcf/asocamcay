@extends('layouts.app')

@section('content')

<div class="container ">

    <hr class="mb-5">
   
    <article class="article text-center">
      <h2 class="article__title">Recetas de Cocina</h2>
      <div class="article__date">2020/04/04</div>
    
    </article>
  <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

    @foreach ($recipe as $recipe)
  
  <div class="list-group">

    
    <div class="list-group-item border border-0 " role="tab" id="headingOne1">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1{{$recipe->id}}" aria-expanded="true"
        aria-controls="collapseOne1{{$recipe->id}}">
        <h5 class="article__title">
            {{$recipe->name}}  <i class="fas fa-angle-down rotate-icon "></i>
        </h5>
      </a>
    </div>

 
    <div id="collapseOne1{{$recipe->id}}" class="collapse " role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
      <div class="card-body">
        <div class="row">
            <div class="col-sm-6 mb-4">
              <img src="/imagenes/productos/{{$recipe->image}}" class="img-fluid z-depth-1-half" alt="">
            </div>
            <div class="col-sm-6 mb-4">
                <blockquote class="blockquote bq-primary">
                    <h4 class="bq-title text-uppercase">Ingredientes</h4>
                    <p class="text-justify text-reset ">
                      <?php 
                      echo nl2br($recipe->ingredients);
                      ?>
                    </p>
                   
                  </blockquote>                 
              <hr>
              <blockquote class="blockquote bq-primary">
                <h4 class="bq-title text-uppercase">Desarollo</h4>
                
                <p class="text-justify"> <?php 
                  echo nl2br($recipe->description);
                  ?></p>
              </blockquote> 
              <hr>
              <blockquote class="blockquote bq-danger">
                <h4 class="bq-title text-uppercase">Notas</h4>
                <p class="text-justify"> <?php 
                  echo nl2br($recipe->notes);
                  ?></p>
              </blockquote> 
    
        
              
    
            </div>
         
    
          </div>

      </div>
    </div>

  </div>
  
  @endforeach



</div>


  </div>


@endsection