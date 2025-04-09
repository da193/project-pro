<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth', 'Admin')->group(function () {
    // delete and update a book in admin

Route::get('/delete_book/{id}', [AdminController::class, 'delete_book'])->name('delete_book');

Route::get('/edit_book/{id}', [AdminController::class, 'edit_book'])->name('edit_book');

Route::post('/update_book/{id}', [AdminController::class, 'update_book'])->name('update_book');

// book options of which the admn control in 
Route::get('/show_book', [AdminController::class, 'show_book'])->name('show_book');

Route::get('/category_loads', [LivreController::class, 'category_loads'])->name('category_loads');

Route::get('/add_category', [LivreController::class, 'add_category'])->name('add_category');

// delete and update a category
Route::get('/delete_category/{id}', [AdminController::class, 'cat_delete'])->name('cat_delete');

Route::get('/update_category/{id}', [AdminController::class, 'edit_cat'])->name('edit_cat');

Route::post('/edit_category/{id}', [AdminController::class, 'update_cat'])->name('update_cat');


// 
Route::get('admin/page', [AdminController::class, 'adminPage'])->name('adminpage');

// add a category and showing up
Route::get('/category_page', [AdminController::class, 'category_page'])->name('category_page');

Route::post('/add_category', [AdminController::class, 'add_category'])->name('add_category');


});

// Route::get('/register', [RegisteredUserController::class, 'create'])->name('regist');
Route::get('/student', [HomeController::class, 'home']) ->name('home');

// adding a book
Route::get('/addbook', [LivreController::class, 'addbook'])->name('add_book');

Route::post('/book/register', [LivreController::class, 'register'])->name('book.register');

// click and show category
Route::get('{/show_cat', [LivreController::class, 'showCat'])->name('categories');

Route::get('/category/{id}', [LivreController::class, 'showBook'])->name('category.book');

// // book options of which the admn control in 
// Route::get('/show_book', [AdminController::class, 'show_book'])->name('show_book');

// Route::get('/category_loads', [LivreController::class, 'category_loads'])->name('category_loads');

// Route::get('/add_category', [LivreController::class, 'add_category'])->name('add_category');

// afficher le search

Route::get('/explore', [HomeController::class, 'explore']) ->name('explore');
Route::get('/search', [HomeController::class, 'search'])->name('search');

// item details
Route::get('/details/{id}', [HomeController::class, 'details'])->name('details');

// // add a category and showing up
// Route::get('/category_page', [AdminController::class, 'category_page'])->name('category_page');

// Route::post('/add_category', [AdminController::class, 'add_category'])->name('add_category');

// // delete and update a category
// Route::get('/delete_category/{id}', [AdminController::class, 'cat_delete'])->name('cat_delete');

// Route::get('/update_category/{id}', [AdminController::class, 'edit_cat'])->name('edit_cat');

// Route::post('/edit_category/{id}', [AdminController::class, 'update_cat'])->name('update_cat');


// // 
// Route::get('admin/page', [AdminController::class, 'adminPage'])->name('adminpage');

// // delete and update a book in admin

// Route::get('/delete_book/{id}', [AdminController::class, 'delete_book'])->name('delete_book');

// Route::get('/edit_book/{id}', [AdminController::class, 'edit_book'])->name('edit_book');

// Route::post('/update_book/{id}', [AdminController::class, 'update_book'])->name('update_book');

// student registration
// Route::get('/pre-inscription', [AdminController::class, 'inscription'])->name('pre-inscription');


// my principal dashboard page that connect to all the other page and the first view page
Route::get('/', [HomeController::class, 'dash']) ->name('Home');


// getting the parameters of the admin panel to see the settings

// get the book file
Route::get('livres/{id}/read', [LivreController::class, 'read'])->name('livres.read');


// abstract for the controller of my admin page
Route::get('/Abstract', [HomeController::class, 'abstract'])->name('homme');
Route::get('/Users', [UsersController::class, 'user'])->name('user');


//the about page of the side 
Route::get('/About', [HomeController::class, 'about'])->name('about');
//contact page
Route::get('/Contact', [HomeController::class, 'contact'])->name('contact');

require __DIR__.'/auth.php';