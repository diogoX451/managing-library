<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    protected $table = "genres";
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at',
    ];

    public function books()
    {
        return $this->hasMany(Books::class, 'book_genre', 'genre_id', 'book_id');
    }
}
