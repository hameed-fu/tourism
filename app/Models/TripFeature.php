<?php

namespace App\Models;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TripFeature extends Model
{
    use HasFactory;
    protected $fillable = ['day','itenary','nightstay','spot','trip_id'];
    
    public function trip()
    {
        return $this->belongsTo(Trip::class,'trip_id','id');
    }
    
}
