<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $table = 'trips';
    protected $fillable = [
        'name',
        'description',
        'pickup_id',
        'destination_id',
        'trip_type_id',
        'activity_id',
        'image',
        'created_by',
        'updated_by',
    ];

    public function pickup()
    {
        return $this->belongsTo(PickupPoint::class, 'pickup_id');
    }

    public function destination()
    {
        return $this->belongsTo(Destinations::class, 'destination_id');
    }

    public function tripType()
    {
        return $this->belongsTo(TripType::class, 'trip_type_id');
    }

    public function activity()
    {
        return $this->belongsTo(Activities::class, 'activity_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'trip_id');
    }

    public function bookingCart()
    {
        return $this->hasMany(BookingCart::class, 'trip_id');
    }

    public function priceVariants()
    {
        return $this->hasMany(PriceVariation::class, 'trip_id');
    }

    public function trip($id)
    {
        // trip with pickup, destination, trip type, activity, price variants
        return $this->with('pickup', 'destination', 'tripType', 'activity', 'priceVariants')->find($id);
    }
}


