@extends('layouts.app')

@section('content')
<!-- Page Header section start here -->
<br><br><br><br><br><br><br>
<div class="row ">
      <div class="col-12">
        <div class="pageheader-content text-center">
          <h2><strong>EVENEMENTS</strong></h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <br>
<div class="">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card">
          <img src="{{asset('assets/images/DCLIC_Mad.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">EVENEMENT</h5>
            <p class="card-text">Après la Côte d’ivoire, la Tunisie et Madagascar, Djibouti a accueilli le 4e Forum D-CLIC Pro, les 14 et 15 décembre 2022, au Palais du peuple. Un forum organisé par l’OIF, en partenariat avec le Ministère de l’Éducation nationale et de la formation professionnelle (MENFOP)</p>
            <p class="card-text">14 et 15 décembre 2022 </p>
            <p class="card-text">Djibouti</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{asset('assets/images/Abidjan.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">EVENEMENT</h5>
            <p class="card-text">L’Organisation internationale de la Francophonie a organisé, les 23 et 24 juin 2022 à Abidjan, le premier Forum D-CLIC Pro. Cet évènement qui s’inscrit dans le cadre du Projet « D-CLIC, Formez-vous au numérique avec l’OIF » a réuni durant deux jours près de 200 participants.</p>
            <p class="card-text">23 et 24 juin 2022</p>
            <p class="card-text">Cote d'Ivoire</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{asset('assets/images/tunisie.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">EVENEMENT</h5>
            <p class="card-text">Après Abidjan en juin dernier, Tunis a accueilli le 2e Forum D-CLIC Pro, les 19 et 20 juillet 2022, à la Cité de la culture. Une rencontre organisée par l’OIF en partenariat avec Net Info et Wecodeland.</p>
            <p class="card-text">23 et 24 juin 2022</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{asset('assets/images/madagascar.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">EVENEMENT</h5>
            <p class="card-text">Après Abidjan et Tunis, le 3e Forum « DCLIC Pro » s’est tenu les 15 et 16 septembre 2022 à Antananarivo. Objectif : mettre en rapport les jeunes malgaches formés aux métiers du numérique dans le cadre du Projet de l’OIF D-CLIC et des entreprises et structures locales œuvrant dans le secteur.</p>
          </div>
        </div>
      </div>
    </div>
    
  </div>

</div>
<!-- Page Header section ending here -->

<!-- Login Section Section Ends Here -->


<!-- footer -->
<div class="news-footer-wrap">

  <!-- Newsletter Section Start Here -->

  <!-- Newsletter Section Ending Here --> 
  <!-- blog section start here -->
    <div class="blog-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                
                <h2 class="title"><strong>Evenements Actuels</strong></h2>
            </div>
            <div class="section-wrapper">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                @foreach($evenement as $evenement)

                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <img src="{{ asset($evenement->photos) }}" alt="">    
                                </div>
                                <div class="post-content">
                                    <a href=""><h4>{{ $evenement->titre}}</h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            
                                            <li><i class="icofont-calendar"></i>{{ $evenement->date}}</li> à 
                                            <li><i></i>{{ $evenement->lieu}}</li>
                                        </ul>
                                    </div>
                                    <p>{{ $evenement->description}}</p>
                                </div>
                                <div class="post-footer">
                                    <!-- <div class="pf-left">
                                        <a href="" class="lab-btn-text">Afficher plus <i class="icofont-external-link"></i></a>
                                    </div> -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->

  @endsection