<?php

use App\Http\Controllers\AdresseController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\SurcategorieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VenteController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Session\Session;


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
Route::get('/expertise', function () {return view('expertise');})->middleware(['hide'])->name('expertise');
Route::get('/vendre-acheter', function () {return view('vendre-acheter');})->name('vendre-acheter');
Route::get('/maison-roumet', function () {return view('maison-roumet');})->name('maison-roumet');
Route::get('/contact', function () {return view('contact');})->name('contact');

//Contrer aspirateur de site
Route::get('/suspect', function (\Illuminate\Http\Request $request) {
    $request->session()->put(['robot'=>true]);
})->name('suspect');

//post
Route::post('/admin/postVente', [VenteController::class, 'postVente'])->middleware(['admin'])->name('postVente ');
Route::post('/admin/postLot', [LotController::class, 'postLot'])->middleware(['admin'])->name('postLot');
Route::post('/admin/postCategorie',[CategorieController::class,'postCategorie'])->middleware(['admin'])->name('postCategorie');
Route::post('/admin/postSurcategorie',[SurcategorieController::class,'postSurcategorie'])->middleware(['admin'])->name('postSurcategorie');
Route::post('/admin/import',[LotController::class,'import'])->middleware(['admin'])->name('import');
Route::post('/post-profile',[UserController::class,'postProfile'])->middleware(['auth'])->name('post-profile');
Route::post('/post-adresse',[AdresseController::class,'postAdresse'])->middleware(['auth'])->name('post-adresse');



//auth
Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/profile',[UserController::class,'showProfile'])->middleware(['auth'])->name('show-profile');
Route::get('/adresse',[AdresseController::class,'showAdresse'])->middleware(['auth'])->name('show-adresse');

//admin
Route::get('/admin/dashboard', function (){return view('admin.dashboard');})->middleware(['admin'])->name('admin-dashboard');
Route::get('/admin/formVente', function (){return view('admin.formVente');})->middleware(['admin'])->name('formVente');
Route::get('/admin/formLot',[LotController::class,'formLot'])->middleware(['admin'])->name('formLot');
Route::get('/admin/formCategorie',[CategorieController::class,'showFormCategorie'])->middleware(['admin'])->name('formCategorie');
Route::get('/admin/formSurcategorie',[SurcategorieController::class,'showFormSurcategorie'])->middleware(['admin'])->name('formSurcategorie');
Route::get('/admin/import-form',[LotController::class,'importForm'])->middleware(['admin'])->name('import-form');



require __DIR__.'/auth.php';
