<?php

namespace App\Models;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'biography',
    ];

    public function livres(): HasMany 
    {
        return $this ->hasMany(Livre::class);
    }
}
