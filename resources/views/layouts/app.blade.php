<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dclic-pro</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/oif.png') }}"  type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- copie -->
    


</head>
<body>

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- header section start here -->
    <header class="header-section bg-white">
        <div class="header-top">
            <div class="container">
                <div class="header-top-area">
                    <ul class="lab-ul left">
                        <li>
                            
                            
                        </li>
                    </ul>
                    <ul class="lab-ul social-icons d-flex align-items-center">
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom ">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="{{ route('accueil') }}"><img src="assets/images/logo/oif.png" style="   height: 30pt;
                             width: 80pt; " alt="logo"></a>
                    </div>
                    <div class="menu-area">
                        <div class="menu">
                            <ul class="lab-ul">
                                <li>
                                    <a href="{{ route('accueil')}}">Accueil</a>
                                </li>
                                
                                <li>
                                    <a href="">D-clic</a>
                                    <ul class="lab-ul">
                                        <li><a href="{{ route('programme')}}">Programme DCLIC</a></li>
                                        <li><a href="{{ route('evenement')}}">Evenement DCLIC</a></li>
                                        
    
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Apprenants</a>
                                    <ul class="lab-ul">
                                        <li><a href="{{ route('cvtheque') }}">CVthèque </a></li>
                                        <li><a href="{{ route('offre') }}">Offres d'emploi </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('blogPost.index') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Entreprise</a>
                                    <ul class="lab-ul">                                                                            
                                        <li><a href="{{ route('index2') }}">Listes des entreprises</a></li>                                        
                                    </ul>
                                </li>
                                <li><a href="{{ route('chatify') }}">Chats</a></li>
                            </ul>
                        </div>
                        @guest
                            @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="login"><i class="icofont-user"></i> <span>Connexion</span> </a>
                        @endif

                        @if (Route::has('register'))

                        <a href="{{ route('register') }}" class="signup"><i class="icofont-users"></i> <span>Inscription</span> </a>
                        @endif
                        <br>
                        @else
                        <a href="{{ route('user.index') }}" class="login"><i></i>{{ Auth::user()->name }} </a>
                        <a href="{{ route('logout') }}" class="signup"><i onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Déconnexion </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                         </form>
                         @endguest
                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="ellepsis-bar d-lg-none">
                            <i class="icofont-info-square"></i>
                            
                        </div>

                    </div>
                    <div class="logo">
                        <a href="{{ route('accueil') }}"><img src="assets/images/logo/auf.png" style="   height: 30pt;
  width: 80pt; " alt="logo"></a>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header section ending here -->
    @yield('content')
<div class="news-footer-wrap">
            <!-- Footer Section Start Here -->
            <footer>
            <div class="footer-bottom style-2  bg-black">
                <div class="container">
                    <div class="section-wrapper">
                        <p>&copy; 2023 <a href="index.html">D-CLIC PRO</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section Ending Here -->
    </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <!-- font awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('js/javaStyle.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress.js') }}"></script>
    <script src="{{ asset('assets/js/lightcase.js') }}"></script>
    <script src="{{ asset('assets/js/counter-up.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    <script src="{{ asset('style/javaStyle.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>