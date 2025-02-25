<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('books', BookController::class);

Route::get('/book', function(Request $request){
    dd('test api');
});

?>