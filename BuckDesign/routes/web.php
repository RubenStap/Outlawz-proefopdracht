<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\App;

Route::get('/localization/{locale}', LocalizationController::class)->name('localization');

Route::middleware('locale')->group(
    function () {


        Route::get('/', function () {
            return view('welcome');
        });
    }
);
