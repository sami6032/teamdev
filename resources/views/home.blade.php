@extends('layouts.app')

@section('content')


    <!-- banner section start here -->


    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets/images/manchette.jpeg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: white; font-size: 25px; font-weight: bold; opacity: 100px ">D-CLIC : former au numérique les talents féminins de demain</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/DCLIC_Mad.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: white; font-size: 25px; font-weight: bold; opacity: 100px ">>A l’occasion de la journée mondiale des compétences des jeunes, le 15 juillet 2023, retour sur le déploiement dans quatre nouveaux pays du programme DCLIC de formation aux métiers du numérique</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/DCLIC_PRo.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: white; font-size: 25px; font-weight: bold; opacity: 100px ">>Pour renforcer les compétences numériques des jeunes de l’espace francophone et multiplier leurs chances d’accéder à des emplois décents, en entreprises et dans l’entreprenariat, l’OIF met en œuvre le programme « D-CLIC, formez-vous au numérique »</h5>
      </div>
    </div></h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>





@endsection
