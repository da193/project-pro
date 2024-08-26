<?php

namespace App\Models;

use App\Models\Author;
use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author_id',
        'category_id',
        'description',  
    ];
    protected $with=['livre'];

    public function author(): BelongsTo
    {
        return $this ->belongsTo(Author::class);
    }

    public function livres(): BelongsTo 
    {
        return $this ->belongsTo(Livre::class);
    }
}
