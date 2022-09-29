<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\HomeController::class, 'index']);


Route::get('/su-kien',[App\Http\Controllers\EventController::class, 'index']);
Route::get('/show/{id}',[App\Http\Controllers\EventController::class, 'show']);


Route::get('/lien-he',[App\Http\Controllers\HomeController::class, 'contact']);
Route::post('/send-mail',[App\Http\Controllers\HomeController::class, 'sendMail']);

// Route::get('/thanh-toan',function(){
//     return view('checkout.checkout');
// });

Route::post('/thanh-toan',[App\Http\Controllers\CheckoutController::class, 'checkout']);
