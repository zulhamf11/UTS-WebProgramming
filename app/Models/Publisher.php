<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Publisher extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'image',
    ];

    protected $table = 'publishers';

    use HasFactory;

    public function books(): HasMany
    {
        return $this->hasMany(Book::class, 'publisher_id', 'id');
    }
}
