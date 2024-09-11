<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo(Customer::class , 'customer_id' , 'id');
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class , 'tour_id' , 'id');
    }
}
