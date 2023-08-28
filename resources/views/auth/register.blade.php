@extends('layouts.app')

@section('content')
    <!-- Page Header section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="pageheader-content text-center">
                        <h2>Créer un compte maintenant apprenant</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="">Inscription</a></li>
                                <li class="breadcrumb-item active" aria-current="page">connexion<li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-6">
                    <div class="pageheader-content text-center">
                        <h2>Créer un compte maintenant entreprise</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="">Inscription</a></li>
                                <li class="breadcrumb-item active" aria-current="page">connexion<li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    <!-- Login Section Section Starts Here -->
    <div class="login-section padding-tb section-bg">
        <div class="container">
            <div class="account-wrapper">
                <h3 class="title">Compte Apprenant</h3>
                <form method="POST" action="{{ route('register') }}" class="account-form">
                @csrf
                    <div class="form-group">
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nom complet">
                    @error('name')
                         <span  role="alert">
                              <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                    </div>

                    <div class="form-group">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Votre email">
                    @error('email')
                         <span  role="alert">
                              <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                    </div>

                    <div class="form-group">
                    <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Votre mot de passe">

                    @error('password')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmez votre mot de passe">

                    </div>
                    <div class="form-group">
                    <button type="submit"  class="lab-btn">
                                    {{ __('Enregister') }}
                    </button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Déja membre? <a href="{{ route('login') }}">Connexion</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section Section Ends Here -->


    <!-- footer -->
    <div class="news-footer-wrap">

        <!-- Newsletter Section Start Here -->

        <!-- Newsletter Section Ending Here -->

        @endsection
