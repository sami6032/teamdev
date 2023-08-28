@extends('layouts.app')
@section('content')
<div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>Les offres disponibles</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="">Entreprise</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('offre') }}">offre</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section start here -->
    <div class="blog-section padding-tb section-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                    @foreach ($offre as $offre)
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="assets/images/blog/01.jpg" alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="blog-single.html"><h4>{{ $offre->titre }}</h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            
                                            <li><i class="icofont-calendar"></i>{{$offre->date_publication}}</li>
                                            
                                        </ul>
                                    </div>
                                    <p>{{$offre->description}}</p>
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