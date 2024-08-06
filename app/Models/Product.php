<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'title_uz',
        'title_ru',
        'title_en',
        'photo',
        'price',
        'quantity',
        'category_id',
        'status',
        'percentage',
        'description_uz',
        'description_ru',
        'description_en',
    ];
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function orderLines() {
        return $this->hasMany(OrderLine::class);
    }


}

