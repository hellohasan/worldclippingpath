<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicePortfolioController;
use App\Http\Controllers\ServiceTestimonialController;
use App\Http\Controllers\Settings\BasicSettingController;
use App\Http\Controllers\Settings\ServerInformationController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('how-we-work', [WelcomeController::class, 'howToWork'])->name('how-to-work');
Route::get('free-trial', [WelcomeController::class, 'freeTrial'])->name('free-trial');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'settings'], function () {

        Route::get('edit-profile', [ProfileController::class, 'manageProfile'])->name('edit-profile');
        Route::post('edit-profile', [ProfileController::class, 'updateProfile'])->name('update-profile');

        Route::get('change-password', [ProfileController::class, 'managePassword'])->name('change-password');
        Route::post('change-password', [ProfileController::class, 'updatePassword'])->name('update-password');

        Route::get('basic-content', [BasicSettingController::class, 'basicContent'])->name('basic-content');
        Route::post('basic-content', [BasicSettingController::class, 'updateBasicContent'])->name('update-basic-content');

        Route::get('logo-favicon', [BasicSettingController::class, 'logoFavicon'])->name('logo-favicon');
        Route::post('logo-favicon', [BasicSettingController::class, 'updateLogoFavicon'])->name('update-logo-favicon');
    });

    Route::group(['prefix' => 'backend'], function () {
        Route::resource('categories', CategoryController::class)->except(['show']);
        Route::resource('services', ServiceController::class)->except(['show']);
        Route::resource('service-category', ServiceCategoryController::class)->except(['show']);
        Route::resource('service-portfolio', ServicePortfolioController::class)->except(['show']);
        Route::resource('service-testimonial', ServiceTestimonialController::class)->except(['show']);
    });

    Route::resource('users', UserController::class);

    Route::get('test-blade', TestController::class)->name('test-blade');

    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);

    Route::get('system-information', [ServerInformationController::class, 'getInformation'])->name('system-information');
});
