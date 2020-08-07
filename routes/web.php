<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@index');
Route::get('/doctors', function () {
    return view('human-resource.doctors.index');
});
Route::get('/employees', function () {
    return view('human-resource.employees.index');
});
Route::get('/patients', function () {
    return view('patients.patient.index');
});
