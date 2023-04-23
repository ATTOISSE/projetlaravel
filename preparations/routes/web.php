<?php

use App\Http\Controllers\ProduitController;
use App\Models\Produit;
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

Route::get('/',[ProduitController::class,'index'])->name('accuiel');
Route::resource('produit', Produit::class);