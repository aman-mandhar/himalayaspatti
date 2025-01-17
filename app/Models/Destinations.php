<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    use HasFactory;

    protected $table = 'destinations';
    protected $fillable = [
        'name',
        'description',
        'image',
        'created_by',
        'updated_by',
    ];


}
