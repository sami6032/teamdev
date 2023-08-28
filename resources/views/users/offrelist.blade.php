@extends('layouts.app')
     
@section('content')
<div class="pageheader-section">
 <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Listes des Offres</h2>
            </div>
        </div>
    </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
          <td>Titre de l'offre</td>
          <td>Description</td>
          <td>Lien pur postuler</td>
          <td>Date de publication</td>
          <td>Date d'expiration</td>
        </tr>
        @foreach ($offres as $offre)
        <tr>
            <td>{{ $offre->titre }}</td>            
            <td>{{$offre->description}}</td>
            <td>{{$offre->lien_inscription}}</td>
            <td>{{$offre->date_publication}}</td>
            <td>{{$offre->date_expiration}}</td>
        </tr>
        @endforeach
    </table>
 </div>
</div>
        
@endsection    

