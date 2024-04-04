<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartiturController;
use App\Http\Controllers\KostumController;
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

// Route::get('/', function () {
//     return view('admin.partitur');
// });

// Route::get('/admin/partitur', [AdminController::class, 'partitur']);
// Route::get('/admin/kostum', [AdminController::class, 'kostum']);
// Route::get('/admin/sertifikat', [AdminController::class, 'sertifikat']);
// Route::get('/admin/surat', [AdminController::class, 'surat']);
// Route::get('/admin/sk', [AdminController::class, 'sk']);
// Route::get('/admin/akun', [AdminController::class, 'akun']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/kostum', [HomeController::class, 'kostum']);


Route::get('/sertifikat', [HomeController::class, 'eror']);
Route::get('/surat', [HomeController::class, 'eror']);
Route::get('/sk', [HomeController::class, 'eror']);


