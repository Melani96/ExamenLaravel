<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('Home');

Route::get('/migraciones', function () {
    return view('migraciones');
})->name('Migraciones');

Route::get('/seeders', function () {
    return view('seeders');
})->name('Seeders');

Route::get('/mail', function () {
    return view('mail');
})->name('Mail');

Route::post('/sugerencia', [mailController::class, 'enviarMail']);