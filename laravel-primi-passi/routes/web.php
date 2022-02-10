<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
        'name' => 'Carlo',
        'surname' => 'Verdi',
        'numbers' => [
            3424545344, 4343424345, 4554434423, 344342345
        ]
    ];

    return view('home', $data);
});
