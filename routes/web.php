<?php

use App\Http\Controllers\WebSite\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class, 'index'])->name('home');