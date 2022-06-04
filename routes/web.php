<?php

use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


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
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('products', ProductController::class);
Route::resource('roles',  App\Http\Controllers\Auth\RoleController::class);
Route::resource('permissions',  App\Http\Controllers\Auth\PermissionController::class);

Route::get('lang/home', [App\Http\Controllers\Common\LangController::class, 'index']);
Route::get('lang/change', [App\Http\Controllers\Common\LangController::class, 'change'])->name('changeLang');
