<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Say extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
        'position_uz',
        'position_ru',
        'position_en',
        'description_uz',
        'description_ru',
        'description_en',
    ];
}
