<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


// Route::get('/', function(){
//     return view('welcome');
// })->name('pdtlist');

Route::resource('/products', ProductController::class);

// Route::get('/new-pdt', [ProductController::class,'print'])->name('newspdt');

