<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "WASSUUUPPPP FROM RCOEM";
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::view('/contact','contact', ['name'=>'Yash']);

// Route::get('/person/{name}', function($name){
//     return "The name is $name.";
// });

Route::get('/person/{name?}', function(?string $name = 'Yash Gupta'){
    return "The name is $name.";
})->name('person');