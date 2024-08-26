<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index()
    {
    
       return view('livres.index');
    }

    public function show(Livre $livre): view
    {
       
        return view('livres.show');
    }

    public function addBook()
    {
        $categories = Category::all();
        return view('livres.add-book',compact('categories'));
    }
    public function register(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|int|max:255',
            'author' => 'required|string|max:255',
            'biography' => 'required|string',
            'description' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        
        // Enregistrer l'auteur
        $author = Author::create([
            'name' => $validated['author'],
            'biography' => $validated['biography'],
        ]);
        
        // Gérer le fichier téléchargé
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $path = $file->store('thumbnails', 'public');
        } else {
            $path = null;
        }
        
        // Enregistrer le livre avec l'ID de l'auteur
        Livre::create([
            'title' => $validated['title'],
            'category_id' => $validated['category_id'],
            'author_id' => $author->id,
            'description' => $validated['description'],
            'thumbnail' => $path,
        ]);
    
        // Rediriger avec un message de succès
        // die;
        return redirect()->route('index')->with('success', 'Livre ajouté avec succès !');
    }


   
}
