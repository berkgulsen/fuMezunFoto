<?php

use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Admin\FrontendController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
    //sasa
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isAdmin'])->group(function (){
    Route::get('dashboard', [FrontendController::class,'index']);
    Route::get('foto-ekle-akademik', [FrontendController::class,'fotoIndex']);
    Route::get('foto-ekle-tarih', [FrontendController::class,'fotoList']);
    Route::get('/admin-listele', [AdminController::class,'list']);
    Route::get('/admin-ekle', [FrontendController::class,'list']);
    Route::post('/admin-ekle-onay', [AdminController::class,'insert']);
    Route::get('admin-düzenle/{id}', [AdminController::class, 'edit']);
    Route::put('admin-güncelle/{id}', [AdminController::class, 'update']);
    Route::get('admin-sil/{id}', [AdminController::class, 'delete']);
});
