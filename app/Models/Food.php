<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'name',
        'short_description',
        'long_description',
        'price',
        'image1',
        'image2',
        'image3',
        'status',
    ];
}
