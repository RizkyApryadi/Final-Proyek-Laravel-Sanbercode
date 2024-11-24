<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['film_id', 'user_id', 'content', 'rating'];

    public function film()
    {
        return $this->belongsTo(Film::class); // Relasi ke Film
    }

    public function user()
    {
        return $this->belongsTo(User::class); // Relasi ke User
    }
}