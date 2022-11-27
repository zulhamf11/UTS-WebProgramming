<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    protected $fillable = [
        'publisher_id',
        'title',
        'author',
        'year',
        'synopsis',
        'image',
    ];
    
    protected $table = 'books';

    public function bookCategories(): HasMany
    {
        return $this->hasMany(BookCategory::class, 'book_id', 'id');
    }
    
    use HasFactory;


}
