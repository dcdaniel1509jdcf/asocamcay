@extends('layouts.app')

@section('content')
<section class="my-5">

  <div class="row">

    <div class="col-sm-12">

      <div class="card card-cascade wider reverse">

        <div class="view view-cascade overlay">
          
          <img class="card-img-top" src="/imagenes/noticias/{{ $news->image }}" alt="Sample image" height="400">
          
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">

          <!-- Title -->
          <h2 class="font-weight-bold"><a>{{ $news->title}}</a></h2>
          <!-- Data -->
          <p>{{$news->created_at->format('d-m-Y')}}</p>
        </div>
      </div>
      <div class="mt-5">

        <p>{!! $news->content !!}
        </p>

      </div>
      <div class="mt-5">

        <h5>  <hr class="mb-5 mt-4">
          <a href="/archivos/noticias/{{$news->file}}">Archivos Disponibles</a>
        </h5>

      </div>
    </div>
  </div>
 
</section>
@endsection