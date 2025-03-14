<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    protected $table = "loans";
    protected $fillable = [
        "user_id",
        "book_id",
        "due_date",
        "status",
        "created_at",
        "updated_at"
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function book()
    {
        return $this->belongsTo(Books::class, "book_id");
    }
}
