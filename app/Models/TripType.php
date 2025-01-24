<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripType extends Model
{
    use HasFactory;

    protected $table = 'trip_types';
    protected $fillable = [
        'name',
        'description',
        'image',
        'created_by',
        'updated_by',
    ];
}
