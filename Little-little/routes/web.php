<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/su-kien',[App\Http\Controllers\EventController::class, 'index'])->name('event');
Route::get('/show/{id}',[App\Http\Controllers\EventController::class, 'show'])->name('event.show');


Route::get('/lien-he',[App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/send-mail',[App\Http\Controllers\HomeController::class, 'sendMail'])->name('sendmail');

// Route::get('/thanh-toan',function(){
//     return view('checkout.checkout');
// });

Route::post('/thanh-toan',[App\Http\Controllers\CheckoutController::class, 'checkout'])->name('checkout');
