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
    $data = config("comics");
    return view('home', compact("data"));
})->name("home");

Route::get('/comics/{index}', function ($index) {
    $data = config("comics");
    if(is_numeric($index) && $index >= 0 && $index < count($data)){
       ;
        return view('comic',  ["comic" => $data[$index]]);
    } else {
        abort(404);
    }
})->name("comics");

