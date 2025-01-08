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

    public function show(Livre $livre)
    {
        $livre = Livre::all();
        return view('livres.show', compact('livre'));
    }

    public function register(Request $request) 
    {
        // Validation des données du formulaire
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id', // Assurez-vous que la catégorie existe
            'biography' => 'nullable|string', // La biographie peut être nullable
            'description' => 'required|string',
            'author_name' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'file_path' => 'required|file|mimes:pdf,epub,txt|max:10000',
        ]);
        
        $filePath = $request->file('file_path')->store('Books', 'public');
        // nGkPbmBG5bFMGIOraVkT87bTlT2HaIx9LSYBRMtz
        
        // Trouver ou créer l'auteur
        $author = Author::firstOrCreate(
            ['name' => $validated['author_name']],
            ['biography' => $validated['biography'] ?? '']
        );
    
        // Gestion du fichier téléchargé
        $path = null;
        if ($request->hasFile('book_img')) {
            $file = $request->file('book_img');
            $path = $file->store('book_img', 'public');
        }
        dump($path);
        dump($path);
        
    
        // Enregistrement du livre avec l'ID de l'auteur
        Livre::create([
            'title' => $validated['title'],
            'category_id' => $validated['category_id'],
            'description' => $validated['description'],
            'author_id' => $author->id, // Utiliser l'ID de l'auteur
            'book_img' => $path,
            'file_path' => $filePath,
        ]);
    
        // Rediriger avec un message de succès
        return redirect()->route('show_book')->with('success', 'Livre ajouté avec succès !');
    }
    

    public function read($id)
{
    $livre = Livre::findOrFail($id);
    // dd($livre->file_path);
    return response()->file("storage/$livre->file_path");
}

   public function showCat() 
    {
        $categories = Category::all(); // Récupère toutes les catégories
        return view('home.show-cat', compact('categories'));
    }

    public function showBook($id)
    {
        $category = Category::with('livres')->findOrFail($id); // Récupère la catégorie avec ses livres
        return view('home.showcatBook', compact('category'));
    }

    
    public function addbook()
    {
        $categories = Category::all();
        $authors = Author::all();
        return view('admin.add-book' ,compact('categories', 'authors'));


    }
    
}
