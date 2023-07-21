<?php

namespace App\Models\Travel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelTheme extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];
}
