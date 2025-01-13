<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calc/{number1)/{calculate}/{number2}', [
    MessageController::class,
    'cal'
]);
