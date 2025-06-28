<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    return view('about');
});
Route::get('/contacts',function(){
    return view('contacts');
});

Route::get('/my_page',[MyPlaceController::class,'index']);
