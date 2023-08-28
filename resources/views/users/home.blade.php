@extends('layouts.app')
   
@section('content')

<div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{ asset('assets/images/blog/04.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="color: white;"><strong>Votre page ENTREPRISE</strong></h1>
        </div>
      </div>
    </div>
     </div>
     <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="{{ route('offres.create') }}">Publier offre</a></li>
        <li class="list-group-item"><a href="http://"></a> Publier un evenement</li>
      </ul>
@endsection