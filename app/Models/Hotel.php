<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    public function tours()
    {
        return $this->belongsToMany(Tour::class , 'tour_hotels' , 'hotel_id' , 'tour_id');
    }
}
