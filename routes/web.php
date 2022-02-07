<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\Auth\RegisterController;


Route::get('/Register', [RegisterController::class , 'index']);


Route::get('/', function () {
    return view('posts.index');
});
