<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\EvenementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EntrepriseController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\BlogpostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OffreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AccueilController::class,'acceuil'])->name('accueil');

Auth::routes();
Route::get('programme', [App\Http\Controllers\ForumController::class, 'programme'])->name('programme');

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

//evenemet
Route::get('evenement', [App\Http\Controllers\EvenementController::class, 'traiterEven'])->name('evenement');
Route::post('evenement', [EvenementController::class,'traitEven'])->name('evenementCreate');
Route::get('AjouterEven', [EvenementController::class,'AjouterEven'])->name('AjouterEven');

//entreprise
Route::get('/entreprise', [EntrepriseController::class,'entreprise'])->name('entreprise');


Route::get('/index2', [EntrepriseController::class,'show'])->name('index2');
Route::get('/edit', [EntrepriseController::class,'edit'])->name('edit');
// Route::post('/edit', [EntrepriseController::class,'update'])->name('edit');
Route::resource('users', EntrepriseController::class);

//offres
Route::get('/offres', [OffreController::class, 'create'])->name('offres.create');
Route::post('/offres', [OffreController::class, 'Offrestore'])->name('offres.store');

Route::get('/offrelist', [OffreController::class, 'liste'])->name('users.offrelist');
Route::post('/offrelist', [OffreController::class, 'Offrestore'])->name('offrelist');

// apprenant

Route::get('cvtheque', [AccueilController::class,'cvtheque'])->name('cvtheque');

Route::get('offre', [AccueilController::class,'offre'])->name('offre');

Route::resource('user', UserController::class)->middleware('auth');

//blog
Route::get('blog', [BlogpostController::class, 'blog'])->name('blog');
Route::resource('blogPost', BlogController::class);

Route::resource('event', EventController::class);
