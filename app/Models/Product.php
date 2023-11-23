<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function scopeFilter($query) {
        if (request('search')) {
            return $query->where('name', 'like', '%' . request('search') . '%');
        }
    }

    protected $fillable = [
        'name',
        'image',
        'stock',
        'price',
        'description',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
