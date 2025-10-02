<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil/{nama}/{npm}/{kelas}', [ProfilController::class, 'profil']);

route::get('/user', [UserController:class, 'index']);
route::get('/user/create', [UserController::class, 'create'])->name('user.create');
route::post('/user', [UserController::class, 'store'])->name('user.store');
