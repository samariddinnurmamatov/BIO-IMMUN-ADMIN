<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'photo',
        'price',
        'quantity',
        'category_id',
        'status',
        'percentage',
        'description',
    ];
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
