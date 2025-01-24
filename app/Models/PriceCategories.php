<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceCategories extends Model
{
    use HasFactory;
    protected $table = 'price_categories';
    protected $fillable = [
        'name',
        'description',
        'image',
        'age_range',
        'created_by',
        'updated_by',
    ];
}
