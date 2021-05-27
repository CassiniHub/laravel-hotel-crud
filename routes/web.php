<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@home')
    -> name('home');

Route::get('edit/employee/{id}', 'MainController@editEmployee')
    -> name('editEmployee');
Route::post('update/employee/{id}', 'MainController@updateEmployee')
    -> name('updateEmployee');

Route::get('delete/employee/{id}', 'MainController@deleteEmployee')
    -> name('deleteEmployee');