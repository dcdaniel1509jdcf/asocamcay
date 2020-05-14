@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-2">
  
        <!-- Section: Blog v.3 -->
<section class="my-5">

 

  <!-- Grid row -->
  @foreach ($news as $news)
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 col-xl-4">
      <!-- Featured image -->
      <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
        <img class="img-fluid" src="/imagenes/noticias/{{$news->image}}" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8">
      <div>
        <!-- Title -->
        <h4 class="card-title font-weight-bold mb-2">{{ $news->title}}</h4>
        <!-- Subtitle -->
        <p class="card-text"><i class="far fa-clock pr-2"></i>{{$news->created_at->format('d-m-Y')}}</p>
  
      </div>
      
      <!-- Excerpt -->
      <p class="dark-grey-text">{{ $news->description }}</p>
      <!-- Post data -->
      <p><a class="font-weight-bold">{{$news->created_at->format('d-m-Y')}}</a></p>
      <!-- Read more button -->
      <a class="btn btn-outline-default waves-effect" href="{{ route('news-detail',$news->id)}}"> ir </a>

    </div>
  </div>
  
  <hr class="my-5">
  @endforeach
</section>
<!-- Section: Blog v.3 -->


      </div>


   
    
  

    @endsection
