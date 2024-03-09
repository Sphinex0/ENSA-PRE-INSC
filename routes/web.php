<?php

use App\Http\Controllers\EtudiantC;
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

Route::get('/', function () {
    return view('accueil');
});


Route::get('/admin', [EtudiantC::class,'index']);
Route::get('/form', [EtudiantC::class,'create']);
Route::post('/ajoute', [EtudiantC::class, 'store'])->name('ajoute');

Route::get('/export-etudiants-excel', [EtudiantC::class, 'exportEtudiantsToExcel'])->name('export.etudiants.excel');
