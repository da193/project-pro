<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Livre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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
       $livre = Livre::where('title', 'LIKE', '%'.$search.'%')->orWhere('auther_name', 'LIKE', '%'.$search.'%')->get();
       return view('home.explore', compact('livre'));

    }
    
   
}
