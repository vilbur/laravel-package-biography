<?php

Route::get('/biography', 'Vilbur\Biography\Controllers\BiographyController@testView');


/* API */
Route::get('/api/biography',	'Vilbur\Biography\Controllers\BiographyController@getAllBiography');