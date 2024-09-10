<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    // admin page load
    public function adminPage()
    {
        $livre = Livre::all();
        return view('admin.adminPage', compact('livre'));
    }

    public function adding()
    {
        return view('admin.adding');
    }

    public function show_book(Livre $livre)
    {
        $livre = Livre::all();
        return view('admin.show-books', compact('livre'));
    }

     public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }

        return Redirect::back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function category_page()
    {
        $livre = Category::all();
        return view('admin.category', compact('livre'));
    }

    public function add_category(Request $request)
    {
       $data = new Category;
       $data ->name = $request ->category;
 
       $data->save();
       
       return redirect()->back()->with('message', 'New Category sucessfully added');
    }

    public function delete_book($id)
    {
        $data = Livre::find($id);
        $data ->delete();

        return redirect()->back()->with('message', 'Book 
        deleted sucessfully');
    }

    public function edit_book($id)
    {
        $livre = Livre:: find($id);
        $category = Category::all();
        // $data ->update();

        return view('admin.edit_book', compact('livre', 'category'));
    }

    public function update_book(Request $request, $id)
    {
        
        $livre = Livre::find($id);
        $livre ->title = $request->title;
        $livre ->author_name = $request->author_name;
        $livre ->category_id = $request->category;
        $livre ->description = $request->description;
        $livre ->book_img = $request->book_img;
        // $book_img ->book_img = $request->book_img;

       
        if ($request->hasFile('book_img')) {
        
            if ($livre->book_img && Storage::exists($livre->book_img)) {
                Storage::delete($livre->book_img);
            }

            $imagePath = $request->file('book_img')->store('thumbnails', 'public');
            $livre->book_img = $imagePath;
        }

        $livre ->save();


        return redirect()->route('show_book');
    }
}
