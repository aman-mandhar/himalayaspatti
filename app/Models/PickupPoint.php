<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupPoint extends Model
{
    use HasFactory;

    protected $table = 'pickup_points';
    protected $fillable = [
        'name',
        'description',
        'image',
        'created_by',
        'updated_by',
    ];
}
