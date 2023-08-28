@extends('layouts.app')

@section('content')
<br>
<br>

    <!-- blog section start here -->
    <div class="blog-section padding-tb section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <article>
                        <div class="section-wrapper">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 justify-content-center g-4">
                            @foreach ($blog as $blog)

                                <div class="col">
                                    <div class="post-item">
                                        <div class="post-inner">
                                            <div class="post-thumb">
                                                <a href="blog-single.html"><img src="assets/images/blog/02.jpg" alt="blog thumb"></a>
                                            </div>
                                            <div class="post-content">
                                                <a href="blog-single.html"><h4>{{ $blog->titre }}</h4></a>
                                                <div class="meta-post">
                                                    <ul class="lab-ul">
                                                        <li><i class=""></i></li>
                                                        <li><i class="icofont-calendar"></i>April 23,2021</li>
                                                    </ul>
                                                </div>
                                                <p>{{ $blog->contenu }}.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
  
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-12">
                    <aside>
                        <div class="widget widget-category">
                            <div class="widget-header">
                                <h5 class="title">Blog Category</h5>
                            </div>
                            <ul class="widget-wrapper">
                                @foreach ($category as $category)
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>{{ $category->libele }}</span></a>
                                </li>
                                @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
 




    @endsection