<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = ['location_name','location_description','location_img','city_id'];
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function hotels()
    {
        return $this->hasOne(Hotel::class);
    }
}
