<?php


Route::get('/', 'PeopleController@index');
Route::get('/search', 'PeopleController@searchPerson');