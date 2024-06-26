<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PiloteDePromotionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EvaluerEntrepriseController;
use App\Http\Controllers\OffreDeStageController;
use App\Http\Controllers\PossedeStageController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LocationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routes for API endpoints

Route::resource('competences', CompetenceController::class);
Route::resource('evaluer_entreprise', EvaluerEntrepriseController::class);
// Route::resource('locations', LocationController::class);
Route::resource('offre_de_stages', OffreDeStageController::class);
Route::resource('pilote_de_promotions', PiloteDePromotionController::class);
// Route::resource('possede_stages', PossedeStageController::class);
Route::resource('promotions', PromotionController::class);
Route::get('/users', [RegisterController::class, 'index'])->name('users.index');
Route::get('/users/create', [RegisterController::class, 'create'])->name('users.create');
Route::post('/users', [RegisterController::class, 'store'])->name('users.store');

Route::get('/entreprises', [EntrepriseController::class, 'index'])->name('entreprise.index');
Route::get('/entreprises/create', [EntrepriseController::class, 'create'])->name('entreprise.create');
Route::post('/entreprises', [EntrepriseController::class, 'store'])->name('entreprise.store');



Route::get('/offers', [OffreDeStageController::class, 'index'])->name('offers.index');
Route::get('/offers/create', [OffreDeStageController::class, 'create'])->name('offers.create');
Route::post('/offers', [OffreDeStageController::class, 'store'])->name('offers.store');
Route::get('/offers/{id}', [OffreDeStageController::class, 'show'])->name('offers.show');
Route::get('/offers/{id}/edit', [OffreDeStageController::class, 'edit'])->name('offers.edit');
Route::put('/offers/{id}', [OffreDeStageController::class, 'update'])->name('offers.update');
Route::delete('/offers/{id}', [OffreDeStageController::class, 'destroy'])->name('offers.destroy');



Route::prefix('api')->group(function () {
    Route::get('/admins', [AdminController::class, 'index']);
    Route::get('/admins/{admin}', [AdminController::class, 'show']);
    Route::post('/admins', [AdminController::class, 'store']);
    Route::put('/admins/{admin}', [AdminController::class, 'update']);
    Route::delete('/admins/{admin}', [AdminController::class, 'destroy']);
});