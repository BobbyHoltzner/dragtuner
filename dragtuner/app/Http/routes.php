<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
	return view('frontend.index');
});
Route::get('/admin', function () {
    return view('dashboard.index');
});

Route::resource('admin/runs', 'RunsController');
Route::resource('admin/tunes', 'TunesController');
Route::resource('admin/tracks', 'TracksController');
