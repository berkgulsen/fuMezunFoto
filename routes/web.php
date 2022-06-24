<?php

use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Admin\fotoController;
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
});

Route::get('/homepage','App\Http\Controllers\front\HomepageController@index')->name('homepage');
Route::post('/homepage/list','App\Http\Controllers\front\HomepageController@show')->name('homepagepost');

Route::get('subDepartment',[adminController::class,'getSub'])->name('subs');
Route::get('department',[adminController::class,'getDepartment'])->name('departments');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['isAdmin:0'])->group(function (){
    Route::get('admin-panel', [FrontendController::class,'adminIndex']);
    Route::get('foto-ekle-akademik', [FrontendController::class,'fotoIndex']);
    Route::get('foto-ekle-tarih', [FrontendController::class,'fotoList']);
    Route::get('foto-ekle', [FotoController::class, 'edit']);
    Route::post('/foto-ekle-onay', [FotoController::class,'insert']);
});

Route::middleware(['foto'])->group(function (){
    Route::get('foto-ekle-akademik', [FrontendController::class,'fotoIndex']);
    Route::get('foto-ekle-tarih', [FrontendController::class,'fotoList']);
    Route::get('foto-ekle', [FotoController::class, 'edit']);
    Route::post('/foto-ekle-onay', [FotoController::class,'insert']);
    Route::get('kullanıcı-bilgi/{id}', [FotoController::class, 'userEdit']);
    Route::post('kullanıcı-bilgi-güncelle/{id}', [FotoController::class,'userUpdate']);

});

Route::middleware(['auth','isAdmin:1'])->group(function (){
    Route::get('dashboard', [AdminController::class,'index']);
    Route::get('/admin-listele', [AdminController::class,'list']);
    Route::get('/admin-ekle', [FrontendController::class,'list']);
    Route::post('/admin-ekle-onay', [AdminController::class,'insert']);
    Route::get('admin-düzenle/{id}', [AdminController::class, 'edit']);
    Route::put('admin-güncelle/{id}', [AdminController::class, 'update']);
    Route::get('admin-sil/{id}', [AdminController::class, 'delete']);

});
