<?php

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

Route::get('/', 'DefaultController@index');


Auth::routes();


Route::middleware(['auth']) -> group(function(){
	Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');
	Route::get('/dashboard/about', 'Dashboard\AboutController@index')->name('dashboard');
    Route::get('/dashboard/experience', 'Dashboard\ExperienceController@index')->name('dashboard');
    Route::get('/dashboard/skills', 'Dashboard\SkillsController@index')->name('dashboard');
	Route::put('/dashboard/about', 'Dashboard\AboutController@update')->name('about');
	Route::resource('/dashboard/experience', 'Dashboard\ExperienceController');
});

