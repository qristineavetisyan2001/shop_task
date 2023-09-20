<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatalogController;
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
    return view('home');
})->name("home");


Route::get('/registration', function () {
    return view('registration');
})->name("registrationPage");

Route::get('/login', function () {
    return view('login');
})->name('loginPage');

Route::get('/userPage', function () {
    return view('userPage');
})->name('userPage');

Route::get('/content', function () {
    return view('content');
})->name('content');

Route::get('/admin', function () {
    if (session("admin")){
        return view('Admin.admin');
    }
    else{
        return view('Admin.adminLogin');
    }
})->name('admin');

Route::post('/setUser', [RegistrationController::class, 'registration'])->name("registration");
Route::post('/loginUser', [LoginController::class, 'login'])->name("login");
Route::post('/loginAdmin', [AdminController::class, 'login'])->name("loginAdmin");
Route::post('/addProduct', [ProductController::class, 'addProduct'])->name("addProduct");
Route::get('/catalog', [CatalogController::class, 'getCatalog'])->name("catalog");

