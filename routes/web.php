<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Coach


Route::get('/equipe-coach', function () {
    return view('pages.Coach.equipeCoach');
});
Route::get('/liste-joueur-coach', function () {
    return view('pages.Coach.listeJoueurCoach');
});
Route::get('/dashboard-coach', function () {
    return view('pages.Coach.dashboardCoach');
});
Route::get('/contact-coach', function () {
    return view('pages.Coach.contactCoach');
});

Route::post('/profil-coach',[ProfilController::class, 'store']);


//Joueur
Route::get('/inscription-joueur', function () {
    return view('pages.Joueur.createJoueur');
});
Route::get('/equipe-joueur', function () {
    return view('pages.Joueur.equipeJoueur');
});
Route::get('/liste-joueur-joueur', function () {
    return view('pages.Joueur.listeJoueur');
});
Route::get('/dashboard-joueur', function () {
    return view('pages.Joueur.dashboardJoueur');
});
Route::get('/contact-joueur', function () {
    return view('pages.Joueur.contactJoueur');
});

//accueil

Route::get('/coach',function () {
    return view('pages.Coach.accueilCoach');
});

Route::get('/joueur',function () {
    return view('pages.Joueur.accueilJoueur');
});