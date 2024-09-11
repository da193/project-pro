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

// adding a book
Route::get('/addbook', [LivreController::class, 'addbook'])->name('add_book');

Route::post('/book/register', [LivreController::class, 'register'])->name('book.register');

// click and show category
Route::get('{/show_cat', [LivreController::class, 'showCat'])->name('categories');

Route::get('/category/{id}', [LivreController::class, 'showBook'])->name('category.book');

// book options of which the admn control in 
Route::get('/show_book', [AdminController::class, 'show_book'])->name('show_book');


Route::get('/category_loads', [LivreController::class, 'category_loads'])->name('category_loads');

Route::get('/add_category', [LivreController::class, 'add_category'])->name('add_category');

// afficher le search

Route::get('/explore', [HomeController::class, 'explore']) ->name('explore');
Route::get('/search', [HomeController::class, 'search'])->name('search');

// item details
Route::get('/details/{id}', [HomeController::class, 'details'])->name('details');


// login 

// Route::post('admin/login', [AdminLoginController::class, 'login'])->name('login');

Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('login');

// Route::post('admin/login', [AdminController::class, 'login'])->name('admin.page');

// Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');


// add a category and showing up
Route::get('/category_page', [AdminController::class, 'category_page'])->name('category_page');

Route::post('/add_category', [AdminController::class, 'add_category'])->name('add_category');

// delete and update a category
Route::get('/delete_category/{id}', [AdminController::class, 'cat_delete'])->name('cat_delete');


// delete and update a book in admin

Route::get('/delete_book/{id}', [AdminController::class, 'delete_book'])->name('delete_book');

Route::get('/edit_book/{id}', [AdminController::class, 'edit_book'])->name('edit_book');

Route::post('/update_book/{id}', [AdminController::class, 'update_book'])->name('update_book');

// student registration
Route::get('/Register', [AdminController::class, 'register'])->name('register');