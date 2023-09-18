<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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


Route::get('/registration', function () {
    return view('registration');
})->name("registrationPage");

Route::get('/login', function () {
    return view('login');
});

Route::post('/setUser', [RegistrationController::class, 'registration'])->name("registration");
Route::post('/loginUser', [LoginController::class, 'login'])->name("login");

