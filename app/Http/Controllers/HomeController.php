<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Livre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dash()
    {
        return view('home.dashboard');
    }

    public function home()
    {
        $livre =Livre::all();
        return view('home.homepage', compact('livre'));
    }

    public function explore()
    {
        $livre = Livre::all();
        return view('home.explore', compact('livre'));


    }

    public function search(Request $request)
    {
        $search = $request ->search;
       $livre = Livre::where('title', 'LIKE', '%'.$search.'%')->orWhere('author_name', 'LIKE', '%'.$search.'%')->get();
       return view('home.explore', compact('livre'));

    }
    
    public function details($id)
    {
        $livre = Livre::findOrFail($id); 
        return view('home.details', compact('livre'));
    }
    // abstract of the controller of my roles
    public function abstract()
    {
        return view('livres.regis-book');
    }
    // abstract of the controller of my roles
    public function about(Request $request)
    {
        return view('home.about');
    }

    // abstract of the controller of my roles
    public function contact(Request $request)
    {
        return view('home.contact');
    }

   
   
}
