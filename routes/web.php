<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/optimize', 'HomeController@optimize');

//Auth::routes();
