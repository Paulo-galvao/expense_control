<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::controller(ProductController::class)->group( function () {

    Route::get('/products/create/{id}', 'create');
    Route::post('/products/create', 'store');

    Route::get('/products/edit/{id}', 'edit');
    Route::patch('/products/edit/{id}', 'update');
    
    Route::get('/products/delete/{id}', 'confirm');
    Route::delete('/products/delete/{id}', 'destroy');
    
    // Route::get('/products/{id}', 'show');
});

Route::controller(ListingController::class)->group( function () {
    Route::get('/listings', 'index');

    Route::get('/listings/create', 'create');
    Route::post('/listings/create', 'store');
    
    Route::get('/listing/edit/{id}', 'edit');
    Route::patch('/listing/edit/{id}', 'update');

    
    Route::get('/listing/delete/{id}', 'confirm');
    Route::delete('/listing/delete/{id}', 'destroy');
    
    Route::get('/listing/{id}', 'show');  
});
