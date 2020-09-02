<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {

    Route::get('/home', 'DashboardController@index')->name('home');

    // DataTables
    Route::get('/projects/data', 'DataController@projects')->name('projects.data');

    Route::resource('projects', 'ProjectController');
});
