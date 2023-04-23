<?php

use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[HomeController::class,'index'])->name('accueil');
Route::get('/client',[ClientController::class,'index'])->name('client');
Route::get('/create',[HomeController::class,'create'])->name('ajout');
Route::get('/liste',[HomeController::class,'liste'])->name('liste');
Route::post('/store',[HomeController::class,'store'])->name('store');
Route::get('/chauffeur',[ChauffeurController::class,'index'])->name('chauffeur');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';