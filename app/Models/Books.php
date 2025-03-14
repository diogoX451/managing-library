<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = "books";
    protected $fillable = [
        'id',
        'title',
        'author',
        'registration_number',
        'status',
        'created_at',
        'updated_at',
    ];

    public function loans()
    {
        return $this->hasMany(Loans::class);
    }

    public function genres()
    {
        return $this->hasMany(Genres::class, 'book_genre', 'book_id', 'genre_id');
    }
}
