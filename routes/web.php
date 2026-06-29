<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\Controller;

Route::get('/', [Controller::class, 'index']);

Route::get('/map', [Controller::class, 'map']);

Route::get('/test', function () {
    return view('bubble-test');
});
