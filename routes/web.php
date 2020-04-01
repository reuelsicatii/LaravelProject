<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */



Route::get('/', function () {
    return view('welcome');
});

Route::get('/StaticRoute', function () {
    return view('pages.page01');
});

    Route::get('/DynamicRoute/{name}', function ($name) {
    return view('pages.page02')->with('name',$name);
});