<?php

use Illuminate\Support\Facades\Route;

Route::view("/", "welcome");
Route::view("/services", "services")->name("services");
Route::view("/brand", "brand")->name("brand");
Route::view("/test", "test")->name("test");

Route::view('/book-now','book-now')->name('book-now');

Route::view("dashboard", "dashboard")
    ->middleware(["auth", "verified"])
    ->name("dashboard");

Route::view("profile", "profile")
    ->middleware(["auth"])
    ->name("profile");

require __DIR__ . "/auth.php";
