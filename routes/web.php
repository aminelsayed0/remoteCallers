<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/plans', function () {
    return view('plans');
})->name('plans');



Route::post ('/send-mail',[MailController::class,'mailData'])->name('send_mail');
