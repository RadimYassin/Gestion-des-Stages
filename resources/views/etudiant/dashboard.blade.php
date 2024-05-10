@extends('layouts.app')
@vite(['resources/css/etudiant.css', 'resources/js/app.js','resources/css/layouts.css'])
@section('content')
<body id="etudiant">

<div class="welcome" >

    <header>
        <h1>Etudiant Dashboard</h1>
    </header>

        <nav>
            <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/stageoffers">les Offres de stage</a></li>
                    @auth
                        <li><a href="{{ route('profile.profile') }}">profile</a></li>
                        <li><a href="{{ route('etudiant.etudiant') }}">Dashboard Étudiant</a></li>
                        <li>
                          
                        </li>
                    @else
                        <li><a class="btn btn-orange" href="{{ route('login') }}">Connexion</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endauth
                    <li class="mt-5">
                        <form action="{{ route('search.offres-stage') }}" method="GET" class="search-form mt-5">
                            <div style="width: 500px" class="input-group mb-3">
                                <input class="form-control" type="text" name="query" placeholder="Rechercher offre de stage..." class="search-input-field">
                                <button   type="submit" class="input-group-text"><img src="{{ asset('images/search.png') }}" alt="Logo" style="width: 70%;"></button>
                            </div>
                            @auth
                                <div style="display: flex;justify-content: center">
                                    <input class=" form-control" width="100px" type="text" name="name" placeholder="Nom de l'entreprise..." >
                                    <input class=" form-control" width="100px" type="text" name="location" placeholder="Lieu..." >
                                    <input class=" form-control" width="100px"  type="text" name="competence" placeholder="Compétences..." >
                                </div>
                            @endauth
                        </form>
                    </li>
                </ul>

        </nav>

    <div class="container" style="height: 200px">
        <h2 >Chercher Un Stage et Postuler Votre Candidature </h2>
        <p style="color: wheat;" >Vous devez Choisir Un stage Selon vous compétances n'oublier pas d'evaluer les entreprise</p>
        <a style="color: rgb(33, 28, 28);"  class="btn btn-primary mx-4" href="/stageoffers"class="action-btn">Offres de stage</a>
        <a class="btn btn-primary"href="{{ route('profile.profile') }}">profile</a>
        <button  href="/stageoffers" class="action-btn">Search for Offers</button>
         <button class="action-btn">View Profile</button>
    </div>

</div>

</body>

@endsection
