<?php

namespace App\Models\Room;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_category_id',
        'amenity_id',
        'bed_type_id',
        'name',
        'room_availability',
        'children_amount',
        'adult_amount',
        'description',
    ];
}
