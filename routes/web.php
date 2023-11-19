<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonController;
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

// Route::get('/aboutus', function () {
//     return view('aboutus');
// });

Route::get(
    '/',
    [HomeController::class, 'index']
)->name('profile');

// Route::get(
//     '/contact',
//     [HomeController::class, 'contact']
// )->name('contact');

Route::post(
    '/contact',
    [HomeController::class, 'create']
)->name('contact.create');

Route::get(
    '/person/{name?}',
    [PersonController::class, 'index']
)->name('person.index');

// Route::resources([
//     'person'=> PersonController::class
// ]);

// Route::resource('person', PersonController::class)->only(['index','create']);

// Route::resource('person', PersonController::class)->except(['create']);

Route::resource('person', PersonController::class)
    ->only(['index','create'])
    ->names([
        'index' => 'person.superindex',
        'create' => 'person.supercreate'
    ]);