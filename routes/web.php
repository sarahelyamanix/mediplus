<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPages; 

// Route::get('/', function () {
//     return view('test');
// });
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

Route::get('/', [FrontPages::class,'home'])->name('home');
Route::get('contactUs', [FrontPages::class, 'contactUs'])->name('contactUs');

});