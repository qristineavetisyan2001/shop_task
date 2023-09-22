<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatalogController;


header("Access-Control-Allow-Origin: http://127.0.0.1:8000");
header("Access-Control-Allow-Headers: Content-Type"); // Allow the content-type header
// Other headers and response data


// Other headers and response data


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
    if(!session("loggedUser")){
        return redirect()->route("loginPage");
    }
    return view('userPage');
})->name('userPage');

Route::get('/admin', function () {
    if (session("admin")){
        return view('Admin.admin');
    }
    else{
        return view('Admin.adminLogin');
    }
})->name('admin');



Route::get('/ordersPage', function () {
    return view('ordersPage');
})->name('ordersPage');


Route::post('/setUser', [RegistrationController::class, 'registration'])->name("registration");
Route::post('/loginUser', [LoginController::class, 'login'])->name("login");
Route::get('/logOut', [LogOutController::class, 'logout'])->name("logOut");
Route::post('/loginAdmin', [AdminController::class, 'login'])->name("loginAdmin");
Route::post('/addProduct', [ProductController::class, 'addProduct'])->name("addProduct");
Route::get('/catalog', [CatalogController::class, 'getCatalog'])->name("catalog");
Route::get('/content/{product}', [ContentController::class, 'getContent'])->name("content");
Route::post('/getProductImages', [ContentController::class, 'getProductImages'])->name("getProductImages");

