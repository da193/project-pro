<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;




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



// Route::get('/', [HomeController::class, 'index']) ->name('index');

Route::get('/', [HomeController::class, 'home']) ->name('home');

// Route::get('/show_book/{livre}', [LivreController::class, 'show'])->name('show_book');

Route::get('{/addbook', [LivreController::class, 'addBook'])->name('addbook');

Route::get('{/show_cat', [LivreController::class, 'showCat'])->name('categories');

Route::get('/category/{id}', [LivreController::class, 'showBook'])->name('category.book');

Route::get('/show_book', [AdminController::class, 'show_book'])->name('show_book');

Route::post('/book/register', [LivreController::class, 'register'])->name('book.register');

Route::get('/category_loads', [LivreController::class, 'category_loads'])->name('category_loads');

Route::post('/add_category', [LivreController::class, 'add_category'])->name('add_category');

// afficher les categories 

// Route::get('/category/{id}', [HomeController::class, 'showCat']) ->name('show_cat');

// Route::get('/livre/{id}', [LivreController::class, 'showBook']) ->name('book_cat');

// afficher le search

Route::get('/explore', [HomeController::class, 'explore']);
Route::get('/search', [HomeController::class, 'search']);