<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RoleController;
use App\Http\Controllers\Auth\PermissionController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Common\ComponentController;

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

Auth::routes();

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function (){
    Route::middleware(['verified'])->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::resource('products', ProductController::class);
        Route::resource('roles',  RoleController::class);
        Route::resource('permissions',  PermissionController::class);

        Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
            \UniSharp\LaravelFilemanager\Lfm::routes();
        });
    });

    Route::prefix('component')->group(function(){
        Route::get('province', [ComponentController::class, 'province'])->name('component.province');
        Route::get('province/{provinceId}/city/', [ComponentController::class, 'cities'])->name('component.cities');
        Route::get('province/{provinceId}/city/{cityId}/district/', [ComponentController::class, 'districts'])->name('component.districts');
        Route::get('province/{provinceId}/city/{cityId}/district/{districtName}', [ComponentController::class, 'subDistricts'])->name('component.subDistricts');
    });
});
