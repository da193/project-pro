<?php

namespace App\Models;

use App\Models\Author;
use App\Models\Category;
use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'author_id',    
        'description',  
        'book_img',
        'file_path',  

    ];
    protected $with=['category', 'author'];

    public function author(): BelongsTo
    {
        return $this ->belongsTo(Author::class);
    }

    public function category(): BelongsTo 
    {
        return $this ->belongsTo(Category::class);
    }
}
