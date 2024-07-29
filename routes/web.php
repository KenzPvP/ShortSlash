<?php

use App\Http\Controllers\linkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home_page');
});

Route::post('/create-link', [linkController::class, 'create']);
Route::get('/{link_token}', [linkController::class, 'get_link']);



