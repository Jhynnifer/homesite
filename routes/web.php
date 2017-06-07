<?php

//general
Route::get('/', 'MainController@home')->name('home');
Route::get('about', 'MainController@about')->name('about');

//contacts
Route::get('contact', 'ContactController@create')->name('contacts');
Route::post('contact', 'ContactController@store')->name('contacts.process');
