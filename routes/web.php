<?php

use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Admin\fotoController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
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
Route::get('fotos',[adminController::class,'getFotos'])->name('fotos');     //urlnin hangi fonksiyona yönlendireceğini seçiyorum

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','role:superAdmin|admin'])->group(function (){
    Route::get('admin-panel', [FrontendController::class,'adminIndex']);
    Route::get('dashboard', [AdminController::class,'index']);
});

Route::middleware(['foto','auth','role:superAdmin|admin'])->group(function (){
    Route::get('foto-ekle-akademik', [FrontendController::class,'fotoIndex']);
    Route::get('foto-sil', [FrontendController::class,'fotoDelete'])->name('foto-sil');
    Route::post('/foto-sil-onay', [FotoController::class,'show']);
    Route::get('foto-single/{id}', [FrontendController::class,'fotoSingle'])->name('foto-single');
    Route::post('foto-edit/{id}', [FotoController::class, 'edit']);
    Route::get('foto-delete/{id}', [FotoController::class,'delete']);
    Route::post('/foto-ekle-onay', [FotoController::class,'insert']);
    Route::get('kullanıcı-bilgi/{id}', [FotoController::class, 'userEdit']);
    Route::put('kullanıcı-bilgi-güncelle/{id}', [FotoController::class,'userUpdate']);

});

Route::middleware(['auth','role:superAdmin'])->group(function (){
    Route::get('/admin-listele', [AdminController::class,'list'])->name('admin.listele');
    Route::get('/admin-ekle', [FrontendController::class,'list']);
    Route::post('/admin-ekle-onay', [AdminController::class,'insert']);
    Route::get('admin-düzenle/{id}', [AdminController::class, 'edit']);
    Route::put('admin-güncelle/{id}', [AdminController::class, 'update']);
    Route::get('admin-sil/{id}', [AdminController::class, 'delete']);

});

Route::middleware(['auth','role:superAdmin'])->name('admin.')->prefix('admin')->group(function (){
    Route::resource('/roles',RoleController::class);
    Route::post('/roles/{role}/permissions',[RoleController::class,'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}',[RoleController::class,'revokePermission'])->name('roles.permissions.revoke');

    Route::resource('/permissions',PermissionController::class);
    Route::post('/permissions/{permission}/roles',[PermissionController::class,'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}',[PermissionController::class,'removeRole'])->name('permissions.roles.remove');


    Route::post('/users/{user}/roles',[AdminController::class,'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}',[AdminController::class,'removeRole'])->name('users.roles.remove');

    Route::post('/users/{user}/permissions',[AdminController::class,'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}',[AdminController::class,'revokePermission'])->name('users.permissions.revoke');
});
