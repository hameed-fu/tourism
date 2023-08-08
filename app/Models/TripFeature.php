<?php

namespace App\Models;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TripFeature extends Model
{
    use HasFactory;
    protected $fillable = ['day','itenary','nightstay','spot'];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
