<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $yarOfbirth = 2000;
    $currentYear = 2023;

    $isAlone = false;
    $age = $currentYear - $yarOfbirth;

    return view('welcome', ['age' => $age, 'alone' => $isAlone]);
});
