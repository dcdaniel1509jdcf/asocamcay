@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-1 ">
  
  
<section class="">
  <h3 class="indigo-text h3 text-center">Noticias</h3>
  @if ($news->isEmpty())
  <article class="article">
    <h4 class="h4 text-center indigo-text">No Disponibles</h4>
  </article>
  @endif 
  <!-- Grid row -->
  @foreach ($news as $news)
  
  <div class="row">
    <div class="col-sm-4">
      
    <div class="card promoting-card border-0">
      <span class="border-top"></span>
      <a class=" waves-effect text-dark" href="{{ route('news-detail',$news->id)}}">
      <div class="card-body d-flex flex-row">
        <div>
          <h5 class="card-title font-weight-bold mb-2">{{ $news->title}}</h5>
          <p class="card-text"><i class="far fa-clock pr-2"></i>{{$news->created_at->format('d-m-Y')}}</p>
        </div>
      </div>
    
      <div class="view overlay">
        <img class="card-img-top rounded-0" src="/imagenes/noticias/{{$news->image}}" alt="Card image cap">
        <a href="{{ route('news-detail',$news->id)}}">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    </a>
      <div class="card-body">
          <p class="card-text" id="collapseContent">{{ $news->description }}</p>
        </div>
        
    </div>
  
    </div>
    </div>
  @endforeach
</section>


      </div>


   
    
  

    @endsection
