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

Route::get('/', function () {return view('accueil');})->name('accueil');
Route::get('/vente-actuelle', function () {return view('vente.vente-actuelle');})->name('vente-actuelle');
Route::get('/vente-ancienne', function () {return view('vente.vente-ancienne');})->name('vente-ancienne');
Route::get('/expertise', function () {return view('expertise');})->name('expertise');
Route::get('/vendre-acheter', function () {return view('vendre-acheter');})->name('vendre-acheter');
Route::get('/maison-roumet', function () {return view('maison-roumet');})->name('maison-roumet');
Route::get('/contact', function () {return view('contact');})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
