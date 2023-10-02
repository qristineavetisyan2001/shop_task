<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
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

Route::get('/ordersPage', function () {
    return view('ordersPage');
})->name('ordersPage');


Route::get('/basketPage', function () {
    return view('basketPage');
})->name('basketPage');

Route::get('/creditCardPage', function () {
    return view('creditCardPage');
})->name('creditCardPage');

Route::post('/setUser', [RegistrationController::class, 'registration'])->name("registration");
Route::post('/loginUser', [LoginController::class, 'login'])->name("login");
Route::get('/logOut', [LogOutController::class, 'logout'])->name("logOut");
Route::post('/loginAdmin', [AdminController::class, 'login'])->name("loginAdmin");
Route::post('/addProduct', [ProductController::class, 'addProduct'])->name("addProduct");
Route::post('/addBasket/{id}', [BasketController::class, 'addBasket'])->name("addBasket");
Route::get('/catalog', [CatalogController::class, 'getCatalog'])->name("catalog");
Route::get('/categories', [CategoryController::class, 'getCategories'])->name("categories");
Route::get('/category/{id}', [CategoryController::class, 'getCategory'])->name("category");
Route::get('/search', [CatalogController::class, 'search'])->name("search");
Route::get('/content/{product}', [ContentController::class, 'getContent'])->name("content");
Route::post('/getProductImages', [ContentController::class, 'getProductImages'])->name("getProductImages");
Route::get('/getBasketProducts', [BasketController::class, 'getBasketProducts'])->name("getBasketProducts");
Route::get('/deleteBasketProduct/{id}', [BasketController::class, 'deleteBasketProduct'])->name("deleteBasketProduct");
Route::post('/changeUserInfo', [UserController::class, 'changeUserInfo'])->name("changeUserInfo");
Route::post('/addCategory', [CategoryController::class, 'addCategory'])->name("addCategory");
Route::get('/admin', [AdminController::class, 'getAdminPage'])->name('admin');
Route::get('/', [HomeController::class, 'getHome'])->name("home");


