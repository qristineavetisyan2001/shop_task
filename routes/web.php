<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\BuyPageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CreditCardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SoldProductController;
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

Route::get('/basketPage', function () {
    return view('basketPage');
})->name('basketPage');



Route::post('/setUser', [RegistrationController::class, 'registration'])->name("registration");
Route::post('/loginUser', [LoginController::class, 'login'])->name("login");
Route::get('/logOut', [LogOutController::class, 'logout'])->name("logOut");
Route::post('/addProduct', [ProductController::class, 'addProduct'])->name("addProduct");
Route::post('/addBasket/{id}', [BasketController::class, 'addBasket'])->name("addBasket");
Route::get('/catalog', [CatalogController::class, 'getCatalog'])->name("catalog");
Route::post('/filter', [CatalogController::class, 'filter'])->name("filter");
Route::get('/categories', [CategoryController::class, 'getCategories'])->name("categories");
Route::get('/history', [HistoryController::class, 'getHistory'])->name("history");
Route::get('/category/{id}', [CategoryController::class, 'getCategory'])->name("category");
Route::get('/search', [CatalogController::class, 'search'])->name("search");
Route::get('/content/{product}', [ContentController::class, 'getContent'])->name("content");
Route::post('/getProductImages', [ContentController::class, 'getProductImages'])->name("getProductImages");
Route::get('/getBasketProducts', [BasketController::class, 'getBasketProducts'])->name("getBasketProducts");
Route::get('/deleteBasketProduct/{id}', [BasketController::class, 'deleteBasketProduct'])->name("deleteBasketProduct");
Route::get('/creditCardPage/{id}', [BuyPageController::class, 'getBuyPage'])->name("creditCardPage");
Route::post("/addCreditCard", [CreditCardController::class, 'addCreditCard'])->name("addCreditCard");
Route::post('/changeUserInfo', [UserController::class, 'changeUserInfo'])->name("changeUserInfo");
Route::post('/addCategory', [CategoryController::class, 'addCategory'])->name("addCategory");
Route::post('/sold/{id}', [SoldProductController::class, 'sold'])->name("sold");
Route::get('/admin', [AdminController::class, 'getAdminPage'])->name('admin');
Route::post('/loginAdmin', [AdminController::class, 'login'])->name("loginAdmin");
Route::get('/logOutAdmin', [AdminController::class, 'logOut'])->name("logOutAdmin");
Route::get('/getTables', [AdminController::class, 'getTables'])->name("getTables");
Route::get('/deleteProduct/{id}', [AdminController::class, 'deleteProduct'])->name("deleteProduct");
Route::get('/deleteCategory/{id}', [AdminController::class, 'deleteCategory'])->name("deleteCategory");
Route::post('/editCategory/{id}', [AdminController::class, 'editCategory'])->name("editCategory");
Route::post('/editProduct/{id}', [AdminController::class, 'editProduct'])->name("editProduct");
Route::get('/', [HomeController::class, 'getHome'])->name("home");

