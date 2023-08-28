@extends('layouts.app')
   
@section('content')
        <!-- Page Header section start here -->
        <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>{{ Auth::user()->name }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                Completez votre profil maintenant <br>
								<form action="{{ route('user.destroy', Auth::user()->id) }}" method="POST">
                                     <a href="{{ route('user.edit', Auth::user()->id) }}">Modifier</a>
                                       @csrf
                                </form>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->


    <!-- instructor Single Section Starts Here -->
    <section class="instructor-single-section padding-tb section-bg">
		<div class="container">
			<div class="instructor-wrapper">
				<div class="instructor-single-top">
					<div class="instructor-single-item d-flex flex-wrap justify-content-between">
						<div class="instructor-single-thumb">
							<img src="assets/images/instructor/single/01.jpg" alt="instructor">
						</div>
						<div class="instructor-single-content">
							<h4 class="title">{{ Auth::user()->name }}</h4>
							<p class="ins-dege">Formation</p>
                           
							<h6 class="subtitle">Realisations</h6>
							<ul class="lab-ul">
								<li class="d-flex flex-wrap justify-content-start">
									<span class="list-name">Email</span>
									<span class="list-attr">{{ Auth::user()->email }}</span>
								</li>
								<li class="d-flex flex-wrap justify-content-start">
									<span class="list-name">Phone</span>
									<span class="list-attr">{{ Auth::user()->numero }}</span>
								</li>
								<li class="d-flex flex-wrap justify-content-start">
									<span class="list-name">website</span>
									<span class="list-attr">{{ Auth::user()->realisation }}</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- instructor Single Section Ends Here -->



@endsection