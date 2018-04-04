<?php

Route::get('/biography', 'Vilbur\Biography\Controllers\BiographyController@testView');
Route::get('/db/biography',	'Vilbur\Biography\Controllers\BiographyController@getAllBiography');