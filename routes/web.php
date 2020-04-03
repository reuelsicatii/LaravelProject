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
    $data = array(
        'title' => 'StaticRoute',
        'contents' => [
            'StaticRoute content01',
            'StaticRoute content02',
            'StaticRoute content03'
        ]
    );
    return view('pages.staticroute')->with($data);
});

Route::get('/DynamicRoute/{name}', function ($name) {
    return view('pages.page02')->with('name', $name);
});

Route::get('/home', 'PagesController@home');

Route::get('/index', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');



