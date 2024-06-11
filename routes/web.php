<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('accounts/index/{account_id?}',[AccountController::class,'index']);

Route::post('dologin',[AccountController::class,'dologin']);
