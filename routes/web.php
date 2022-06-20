<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RoleController;
use App\Http\Controllers\Auth\PermissionController;
use App\Http\Controllers\Web\Item\ItemController;
use App\Http\Controllers\Web\Common\ComponentController;
use UniSharp\LaravelFilemanager\Lfm;

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

Route::resource('roles',  RoleController::class);
Route::resource('permissions',  PermissionController::class);

Route::middleware(['web', 'auth', 'verified'])->group(callback: function (){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('products', ItemController::class);

    Route::prefix('component')->group(callback: function(){
        Route::get('timezones', [ComponentController::class, 'timezones'])->name('component.timezones');
        Route::get('currencies', [ComponentController::class, 'currencies'])->name('component.currencies');
        Route::get('province', [ComponentController::class, 'provinces'])->name('component.provinces');
        Route::get('province/{provinceId}/city/', [ComponentController::class, 'cities'])->name('component.cities');
        Route::get('province/{provinceId}/city/{cityId}/district/', [ComponentController::class, 'districts'])->name('component.districts');
        Route::get('province/{provinceId}/city/{cityId}/district/{districtName}', [ComponentController::class, 'subDistricts'])->name('component.subDistricts');
    });
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        Lfm::routes();
    });

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
