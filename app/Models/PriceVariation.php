<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceVariation extends Model
{
    use HasFactory;

    protected $fillable = [
        'price_category_id',
        'trip_id',
        'price',
    ];

    public function priceCategory()
    {
        return $this->belongsTo(PriceCategories::class, 'price_category_id');
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id');
    }

    public function price($id)
    {
        // return with price category and trip

        return $this->where('trip_id', $id)->with('priceCategory', 'trip')->get();
    }
}
