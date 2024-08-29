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

    public function addBook()
    {
        $categories = Category::all();
        $authors = Author::all();
        return view('livres.add-book',compact('categories', 'authors'));
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
        ]);
    
        // Trouver ou créer l'auteur
        $author = Author::firstOrCreate(
            ['name' => $validated['author_name']],
            ['biography' => $validated['biography'] ?? '']
        );
    
        // Gestion du fichier téléchargé
        $path = null;
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $path = $file->store('thumbnails', 'public');
        }
    
        // Enregistrement du livre avec l'ID de l'auteur
        Livre::create([
            'title' => $validated['title'],
            'category_id' => $validated['category_id'],
            'description' => $validated['description'],
            'author_name' => $author->id, // Utiliser l'ID de l'auteur
            'book_img' => $path,
        ]);
    
        // Rediriger avec un message de succès
        return redirect()->route('index')->with('success', 'Livre ajouté avec succès !');
    }
    
    public function category_loads()
    {
      return view('admin.category');
    }

   public function add_category(Request $request)
   {
      $data = new Category;
      $data ->name = $request ->category;

      $data->save();
      
      return redirect()->back()->with('message', 'New Category sucessfully added');
   }
}
