<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'trip_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id');
    }

    public function bookingCart()
    {
        return $this->hasMany(BookingCart::class, 'booking_id');
    }

    public function bookings($id)
    {
        // return booking details with user and trip details
        return Booking::with('user', 'trip')->where('id', $id)->first();
    }
}
