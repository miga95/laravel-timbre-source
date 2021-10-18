<?php

use App\Http\Controllers\AdresseController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\PagesController;
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
//Public get
Route::get('/', [PagesController::class, 'showAccueil'])->name('accueil');
Route::get('/vente-actuelle', [PagesController::class, 'showVenteActuelle'])->name('vente-actuelle');
Route::get('/vente-ancienne',[PagesController::class, 'showVenteAncienne'])->name('vente-ancienne');
Route::get('/expertise', [PagesController::class, 'showExpertise'])->name('expertise');
Route::get('/vendre-acheter', [PagesController::class, 'showVendreAcheter'])->name('vendre-acheter');
Route::get('/maison-roumet', [PagesController::class, 'showMaisonRoumet'])->name('maison-roumet');
Route::get('/contact',[PagesController::class, 'showContact'])->name('contact');
Route::get('/pdf',[VenteController::class,'downloadCatalogue'])->name('download-catalogue');
Route::get('/lot/{id}',[LotController::class,'showLotById'])->name('show-lot');
Route::get('vente/{venteId}/surcategorie/{surcategorieId}/categorie/{categorieId}',[LotController::class,'showSurcategoriesAndCategoriesofLastVente'])->name('show-surcategories-of-last-vente');
Route::get('lang/home',[LangController::class,'index']);
Route::get('lang/change',[LangController::class,'change'])->name('changeLang');
Route::get('mail',function(){return view('mail');});

//Route::get('vente/{venteId}/surcategorie/{surcategorieId}/categorie/{categorieId}',[LotController::class,'showLotsFilteredBySurcategorieAndCategorie'])->name('show-filtered-lots');

//Contrer aspirateur de site
Route::get('/suspect', function (\Illuminate\Http\Request $request) {
    $request->session()->put(['robot' => true]);
})->name('suspect');

//post
Route::post('/admin/postVente', [VenteController::class, 'postVente'])->middleware(['admin'])->name('postVente ');
Route::post('/admin/postLot', [LotController::class, 'postLot'])->middleware(['admin'])->name('postLot');
Route::post('/admin/postCategorie',[CategorieController::class,'postCategorie'])->middleware(['admin'])->name('postCategorie');
Route::post('/admin/postSurcategorie',[SurcategorieController::class,'postSurcategorie'])->middleware(['admin'])->name('postSurcategorie');
Route::post('/admin/import',[LotController::class,'import'])->middleware(['admin'])->name('import');
Route::post('/post-profile',[UserController::class,'postProfile'])->middleware(['auth'])->name('post-profile');
Route::post('/post-adresse',[AdresseController::class,'postAdresse'])->middleware(['auth'])->name('post-adresse');
Route::post('/post-contact',[ContactController::class,'postContact'])->name('post-contact');




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
Route::get('/admin/lots',[LotController::class,'showLots'])->middleware(['admin'])->name('show-lots');
Route::get('/admin/ventes',[VenteController::class,'showVentes'])->middleware(['admin'])->name('show-ventes');



require __DIR__.'/auth.php';
