<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'CarController@carView') -> name('indexLink');
Route::get('/car/{id}', 'CarController@carDetailsView') -> name('carDetailsLink');
Route::get('/pilot/{id}', 'PilotController@pilotDetailsView') -> name('pilotDetailsLink');