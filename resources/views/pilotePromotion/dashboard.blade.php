@extends('layouts.app')
@vite(['resources/css/welcome.css', 'resources/js/app.js','resources/css/layouts.css'])
@section('content')
<header>
        <h1>Pilote de Promotion Dashboard</h1>
    </header>

         <nav>
            <ul>
                    <li><a href="/" class="rubik-scribble">Accueil</a></li>
                    <li><a class="rubik-scribble" href="/stageoffers">les Offres de stage</a></li>
                    @auth
                        <li><a class="rubik-scribble" href="{{ route('profile.profile') }}">profile</a></li>
                        <li><a class="rubik-scribble" href="{{ route('entreprise.create') }}">Create Entreprise</a></li>
                       
                    @else
                        <li><a class="rubik-scribble" href="{{ route('login') }}">Connexion</a></li>
                        <li><a  class="rubik-scribble" href="{{ route('register') }}">Register</a></li>
                    @endauth
                    <li>
                        <form action="{{ route('search.pilotes') }}" method="GET">
                            <input type="text" name="query" placeholder="Rechercher pilotes...">
                            <button type="submit">Rechercher pilotes</button>
                        </form>
                    </li>
                </ul>

        </nav>

    <div class="container" style="text-align: center;">
        <h2 style="color: #ff6600;">Chercher Un Stage et Postuler Votre Candidature </h2>
        <p style="color: rgb(44, 43, 42);">Vous devez Choisir Un stage Selon vous compétances n'oublier pas d'evaluer les entreprise</p>
       
        <div class="" style="display:flex; justify-content: center;flex-wrap:wrap;gap:5px;" >
                <a class="btn btn-primary " href="/stageoffers"class="action-btn">Offres de stage</a>
                <a class="btn btn-primary " href="{{ route('profile.profile') }}">profile</a>
                <a class="btn btn-primary " href="{{ route('admins.pilotes') }}">Gestion des Pilotes</a>
                <a class="btn btn-primary " href="{{ route('profile.profile') }}">Nouveau Pilote</a>
                <a class="btn btn-primary " href="{{ route('pilotePromotion.preview') }}">editer</a>
              
                <a class="btn btn-primary " href="{{ route('offers.stat') }}">Les Statistique des entreprise</a>
        </div>
        
        
    </div>
      <div  style="text-align: center;margin-top:6%">
                <div >
                    <div >
                        <h5 >Pilotes</h5>
                        <p >View, update, and delete pilotes records.</p>
                        <a href="{{ route('admins.pilotes') }}" class=" btn-primary">Go to Pilotes</a>
                    </div>
                </div>
            </div>

@endsection
