<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Livre;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adding()
    {
        return view('admin.adding');
    }

    public function show_book(Livre $livre)
    {
        $livre = Livre::all();
        return view('admin.show-books', compact('livre'));
    }
}
