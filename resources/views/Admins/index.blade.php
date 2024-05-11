@extends('layouts.app')
@vite(['resources/css/welcome.css', 'resources/js/app.js','resources/css/layouts.css'])
@section('content')
<div class="welcome" style="background-color: white;">
     <header>
        <h1 style="color: black;">Gestion des offres de stage pour les étudiants</h1>
        <a class="btn btn-primary mx-5 " href="{{ route('entreprise.create') }}">Create Entreprise</a>
        <a class="btn btn-primary " href="{{ route('entreprise.index') }}">Les Entreprise</a>
    </header>

   <nav>

<div class="row">
<h1 class="bebas-neue-regular"    style="color: black;">Gestion des Comptes</h1>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Etudiants</h5>
        <p class="card-text">View, update, and delete etudiants records.</p>
        <a href="{{ route('admins.etudiants') }}" class="btn btn-primary">Go to Etudiants</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pilotes</h5>
        <p class="card-text">View, update, and delete pilotes records.</p>
        <a href="{{ route('admins.pilotes') }}" class="btn btn-primary">Go to Pilotes</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Admins</h5>
        <p class="card-text">View, update, and delete admins records.</p>
        <a href="{{ route('admins.admins') }}" class="btn btn-primary">Go to Admins</a>
      </div>
    </div>
  </div>
  <div class="col-md-4 mt-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Users</h5>
        <p class="card-text">View, update, and delete users records.</p>
        <a href="{{ route('admins.users') }}" class="btn btn-primary">Go to Users</a>
      </div>
    </div>
  </div>
  <div class="col-md-4 mt-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">offers</h5>
        <p class="card-text">View, update, and delete users records.</p>
        <a href="{{ route('offers.stages') }}" class="btn btn-primary">Go to offers</a>
      </div>
    </div>
  </div>
</div>


<div class="row mt-3">
<h2 style="color: black;;" class="newcard-title">Dashboards</h2>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Étudiant</h5>
          <p class="card-text">Accédez au tableau de bord de l'étudiant.</p>
          <a href="{{ route('etudiant.etudiant') }}" class="btn btn-primary">Dashboard Étudiant</a>
        </div>
      </div>
    </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pilote de Promotion</h5>
        <p class="card-text">Accédez au tableau de bord du pilote de promotion.</p>
        <a href="{{ route('pilotePromotion.dashboard') }}" class="btn btn-primary">Dashboard Pilote</a>
      </div>
    </div>
  </div>
</div>
@endsection