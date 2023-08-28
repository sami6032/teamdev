@extends('layouts.app')
     
@section('content')
<div class="pageheader-section">
 <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> OFFRES D'EMPLOI</a>
            </div>
        </div>
    </div>
</div>

<form action="{{ route('offres.store') }}" method="POST">
    @csrf
    <label for="title">Titre de l'offre :</label>
    <input type="text" name="titre" id="title" required>
    
    <label for="description">Description :</label>
    <textarea name="description" id="description" required></textarea>

    <label for="title">Lien pour postuler :</label>
    <input type="text" name="lien_inscription" id="lien_inscription" required>

    <label for="title">Date de publication :</label>
    <input type="date" name="date_publication" id="date_publication" required>

    <label for="title">Date d'expiration :</label>
    <input type="date" name="date_expiration" id="date_expiration" required>

    <button type="submit">Publier l'offre d'emploi</button>

</form>
@endsection