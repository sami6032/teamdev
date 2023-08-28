@extends('layouts.app')
     
@section('content')
{{-- copier --}}
<div class="shop-single padding-tb">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-8 col-12">
                    <article>
                        <div class="review">
                            <ul class="review-nav lab-ul">
                                <li class="desc" data-target="description-show">Entreprises</li>
                            </ul>
                            @foreach ($entreprises as $entreprise)

                            <div class="review-content review-content-show">
                                <div class="review-showing">
                                    <ul class="content lab-ul">
                                          <li>
                                            <div class="post-thumb">
                                                <img src="assets/images/instructor/04.jpg" alt="shop">
                                            </div>
                                            <div class="post-content">
                                                <div class="entry-meta">
                                                    <div class="posted-on">
                                                        <a href="#">{{ $entreprise->name }}</a>
                                                        <p>Posted on December 25, 2017 at 6:57 am</p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="entry-content">
                                                    <p>{{$entreprise->mission}}</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-12">
                    <aside>
                        
                        <div class="widget shop-widget">
                            <div class="widget-header">
                                <h5>Toutes les Categories</h5>
                            </div>
                            <div class="widget-wrapper">
                                <ul class="shop-menu lab-ul">
                                    
                                    <li><a href="#0">Developpement web</a>
                                        
                                    </li>
                                    <li><a href="#0">Web mobil</a>
                                        
                                    </li>
                                    <li><a href="#0">Marketing et Communication</a>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->

{{-- end copy --}}
@endsection    

