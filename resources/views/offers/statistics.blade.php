@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="text-align: center;">Gestion Des Applications Statistics</h1>
        <div class="row">
            <div class="col-md-6 mb-4 text-dark">
                <a href="{{ route('offers.stages') }}" class="text-decoration-none text-dark">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0  text-dark">Total Offers</h5>
                        </div>
                        <div class="card-body">
                            <p class="mb-0  text-dark">{{ $totalOffers }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0  text-dark">Total Candidates</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-0  text-dark">{{ $totalCandidates }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <a href="{{ route('admins.entreprises') }}" class="text-decoration-none text-dark">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0  text-dark">Total Entreprises</h5>
                        </div>
                        <div class="card-body">
                            <p class="mb-0  text-dark">{{ $totalEntreprises }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-4">
                <a href="{{ route('admins.etudiants') }}" class="text-decoration-none text-dark">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0  text-dark">Total Etudiants</h5>
                        </div>
                        <div class="card-body">
                            <p class="mb-0  text-dark">{{ $totalEtudiants }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-4">
                <a href="{{ route('admins.pilotes') }}" class="text-decoration-none text-dark">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0  text-dark">Total Pilotes</h5>
                        </div>
                        <div class="card-body">
                            <p class="mb-0  text-dark">{{ $totalPilotes }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0  text-dark">Total Evaluation par Pilote</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-0  text-dark">{{ $totalEvaluationsPilote }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0  text-dark">Total Evaluation des entreprise</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-0  text-dark">{{ $totalEvaluationsEntreprise }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <a href="{{ route('admins.admins') }}" class="text-decoration-none text-dark">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0  text-dark">Total Admins</h5>
                        </div>
                        <div class="card-body">
                            <p class="mb-0  text-dark">{{ $totalAdmins }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0  text-dark">Total Promotions</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-0  text-dark">{{ $totalPromotions }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add more statistics cards here as needed -->
    </div>
@endsection
