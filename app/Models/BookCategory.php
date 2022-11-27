<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BookCategory extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'book_category';

    protected $fillable = [
        'book_id',
        'category_id'
    ];

    /**
     * Get the categories associated with the BookCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categories(): HasOne
    {
        return $this->hasOne(Categories::class, 'id', 'category_id');
    }

    /**
     * Get the books associated with the BookCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function books(): HasOne
    {
        return $this->hasOne(Book::class, 'id', 'book_id');
    }
}
