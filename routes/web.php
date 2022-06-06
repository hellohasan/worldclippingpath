<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Settings\BasicSettingController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'settings'], function () {

        Route::get('manage-profile', [ProfileController::class, 'manageProfile'])->name('manage-profile');
        Route::post('manage-profile', [ProfileController::class, 'updateProfile'])->name('update-profile');

        /* Route::get('manage-password', 'DashboardController@managePassword')->name('manage-password');
        Route::post('manage-password', 'DashboardController@updatePassword')->name('update-password'); */

        Route::get('basic-content', [BasicSettingController::class, 'basicContent'])->name('basic-content');
        Route::post('basic-content', [BasicSettingController::class, 'updateBasicContent'])->name('update-basic-content');

        Route::get('logo-favicon', [BasicSettingController::class, 'logoFavicon'])->name('logo-favicon');
        Route::post('logo-favicon', [BasicSettingController::class, 'updateLogoFavicon'])->name('update-logo-favicon');
    });

    Route::get('test-blade', TestController::class)->name('test-blade');

    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    //Route::resource('users', UserController::class);

});
