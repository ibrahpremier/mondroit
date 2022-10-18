<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieArticleController;
use App\Http\Controllers\TicketController;

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
})->name('home');

Route::get('/activation', function () {
    return view('paiement');
})->name('paiement');

Route::resources([
    'partenaire'=>PartenaireController::class,
    'article'=>ArticleController::class,
    'categorie'=>CategorieArticleController::class,
    'ticket'=>TicketController::class,
]);

Route::get('/login', function () { return view('login');})->name('login');
Route::get('/register', function () { return view('register');})->name('register');


Route::post('/login',[UserController::class,'login'])->name('auth.connect');
Route::post('/register',[UserController::class,'register'])->name('auth.register');


Route::get('disconnect', [UserController::class, 'disconnect'])->name('disconnect');