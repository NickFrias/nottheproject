<?php

use Illuminate\Support\Facades\Route;
use resources\views\landing;

Route::get('/', function () {
    return view('landing');
});


