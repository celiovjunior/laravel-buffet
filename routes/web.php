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
    $arr = ['rodrigo', 'matheus', 'eduardo', 'matias'];

    $numbersArr = [24, 36, 55, 12, 17, 59];

    return view(
        'welcome',
        [
            'arr' => $arr,
            'numbersArr' => $numbersArr
        ]
    );
});

Route::get('/page', function () {
    return view('page');
});
