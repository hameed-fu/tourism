<?php

namespace App\Models;

use App\Models\Trip;
use App\Models\Location;
use App\Models\Province;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['city_name','city_img','province_id'];

    /**
     * Get the province that owns the City
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
    public function trips()
    {
        return $this->hasMany(Trip::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
