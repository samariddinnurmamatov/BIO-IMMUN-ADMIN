<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=[
        'title_uz',
        'title_ru',
        'title_en',
        'photos',
        'description_uz',
        'description_ru',
        'description_en',
    ];
    protected $casts = [
        'photos' => 'array',
    ];
}
