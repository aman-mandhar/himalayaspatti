<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
