<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPages; 

// Route::get('/', function () {
//     return view('test');
// });

Route::get('/', [FrontPages::class,'home'])->name('home');
Route::get('contactUs', [FrontPages::class, 'contactUs'])->name('contactUs');