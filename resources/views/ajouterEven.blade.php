@extends('layouts.app')

@section('content')



</div>
<!-- Login Section Section Starts Here -->
<div class="row padding-tb">
<div class="login-section  section-bg">
  <div class="container">
    <div class="account-wrapper">
      <h3 class="title">Publication d'un evènement</h3>
      <form  action="{{ route('evenementCreate') }}" class="account-form" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <input type="file" name="photos" placeholder="photos">
          @error('photos')
          <span role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          </div>
          <div class="form-group">
          <input id="titre" type="text" name="titre" value="{{ old('titre') }}" required autocomplete="titre" autofocus placeholder="Titre de l'évènement">
          @error('titre')
          <span role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <textarea name="description" id="description" cols="30" rows="10" value="{{ old('description') }}" required autocomplete="description" placeholder="description"></textarea>
          @error('description')
          <span role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="form-group">
          <input id="lieu" type="lieu" name="lieu" required autocomplete="lieu" placeholder="lieu">
          @error('password')
          <span role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="form-group">
          <input id="date" type="date" name="date" required autocomplete="date" placeholder="date">
          @error('password')
          <span role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <a href="">
            <button type="submit" class="lab-btn text-light">
              {{ __('Publier') }}
            </button>
          </a>
        </div>
      </form>
      <!-- <div class="account-bottom">
                    <span class="d-block cate pt-10">Are you a member? <a href="login.html">Login</a></span>
                </div> -->
    </div>
  </div>
</div>
<!-- Login Section Section Ends Here -->

@endsection