<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'trip_id',
        'destination_id',
        'activity_id',
        'trip_type_id',
        'pickup_id',
        'image_path',
        'caption',
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id');
    }

    public function destination()
    {
        return $this->belongsTo(Destinations::class, 'destination_id');
    }

    public function activity()
    {
        return $this->belongsTo(Activities::class, 'activity_id');
    }

    public function tripType()
    {
        return $this->belongsTo(TripType::class, 'trip_type_id');
    }

    public function pickupPoint()
    {
        return $this->belongsTo(PickupPoint::class, 'pickup_id');
    }

    public function getImagePathAttribute($value,)
    {
        return asset('storage/' . $value);
    }

    public function setImagePathAttribute($value)
    {
        $this->attributes['image_path'] = str_replace('storage/', '', $value);
    }



}
