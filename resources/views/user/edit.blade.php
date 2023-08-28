@extends('layouts.app')

@section('content')
<br>
<br>
<br>

    <!-- Login Section Section Starts Here -->
    <div class="login-section padding-tb section-bg">
        <div class="container">
            <div class="account-wrapper">
                <h3 class="title">Modification du profile</h3>
                <form action="{{ route('user.update', Auth::user()->id) }}" class="account-form my-4"  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                    <div class="form-group">
                        <strong>Nom et Prénom</strong>
                    <input id="name" type="text" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" placeholder="Nom complet" >
                    </div>
                    <div class="form-group">
                        <strong>Votre Photo</strong>
                    <input id="photo" type="file" name="photo" value="{{ Auth::user()->photo }}" required autocomplete="photo" placeholder="votre cv">
                    </div>
                    <div class="form-group">
                        <strong>Numéro</strong>
                    <input id="numero" type="number" name="numero" value="{{ Auth::user()->numero }}" required autocomplete="numero" placeholder="votre numero">
                    </div>
                    <button type="submit"  class="lab-btn">
                                    {{ __('Valider') }}
                    </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Login Section Section Ends Here -->


    <!-- footer -->

        @endsection
