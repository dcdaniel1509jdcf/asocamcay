@extends('layouts.app')

@section('content')
<section class="my-5">

  <div class="row">
<div class='col'></div>
    <div class="col-sm-6">

      <div class="card card-cascade wider reverse">

        <div class="view view-cascade overlay">
          
          <img class="card-img-top" src="/imagenes/noticias/{{ $news->image }}" alt="Sample image" height="400">
          
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Card content -->
        
      </div>
      <div class="mt-2 text-center">
<div class="row justify-content">
  <div class="col-sm-6 d-flex justify-content-center"><p class="h2 font-weight-bold justify-content-start">{{ $news->title}} </p></div>
  <div class="col-sm-6 d-flex justify-content-center my-2"><small><i class="far fa-clock pr-2"></i>{{$news->created_at->format('d-m-Y')}}</small></h6></div>  
</div>
      </div>
      <div class="">

        <p>{!! $news->content !!}
        </p>

      </div>
      @if( $news->file != null)
      <div class="mt-5">
        <h5>  <hr class="mb-5 mt-4">
          <a href="/archivos/noticias/{{$news->file}}">Archivos Disponibles</a>
        </h5>
      </div>
      @endif
      
    </div>
    <div class='col'></div>
   
  </div>
  <hr >
</section>
@endsection