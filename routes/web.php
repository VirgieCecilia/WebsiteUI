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
    return view('main/home');
});

Route::prefix('/')->group(function(){
    Route::get('/detail', function(){
        return view('main/detail');
    });
    Route::get('/shirt', function(){
        return view('main/shirt');
    });
    Route::get('/top', function () {
        return view('main/top');
    });
    Route::get('/brand', function () {
        return view('main/detailbrand');
    });
    Route::get('/aboutUs', function () {
        return view('main/about');
    });

});
