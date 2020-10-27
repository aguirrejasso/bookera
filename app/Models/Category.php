<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category'
    ];

    public function setCategoryAttribute($value)
    {
        $this->attributes['category'] = strtolower($value);
    }

    public function getCategoryAttribute($value)
    {
        return ucfirst($value);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
