<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function tour()
    {
        return $this->belongsTo(Tour::class , 'tour_id' , 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class , 'customer_id' , 'id');
    }
}
