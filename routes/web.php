<?php

use Illuminate\Support\Facades\Route;

// Маршрут для основной страницы приложения
Route::get('/', function () {
    return view('welcome');
});
