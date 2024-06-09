<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::middleware("guest")->group(function () {
    Route::view("/login", "auth.login");
    Route::post("/login", "App\Http\Controllers\AuthController@login")->name("login");
});

Route::middleware("auth")->group(function () {
    Route::get("/logout", "App\Http\Controllers\AuthController@logout")->name("logout");
});


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    ###########################################################################
    ### Admin Routes
    ###########################################################################
    Route::prefix("/admin")->as("admin.")->group(function () {
        Route::middleware(["auth", "adminOnly"])->group(function () {
            Route::redirect("/", "/admin/home");
            Route::get("/home", "App\Http\Controllers\HomeController@index")->name("home");

            Route::resource("users", "App\Http\Controllers\UserController");

            Route::get("/profile", "App\Http\Controllers\UserController@profile")->name("profile.index");
            Route::get("/profile/edit", "App\Http\Controllers\UserController@editProfile")->name("profile.edit");
        });
    });
});
