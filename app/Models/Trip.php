<?php

namespace App\Models;

use App\Models\City;
use App\Models\TripType;
use App\Models\Transport;
use App\Models\TripFeature;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = ['trip_name','start_date','end_date','city_id','triptype_id','transportation_id','status','trip_description'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function triptype()
    {
        return $this->belongsTo(TripType::class);
    }

    public function transport()
    {
        return $this->belongsTo(Transport::class,'transportation_id','id');
    }

    public function review(){
        return $this->hasMany(Review::class);
    }
    public function tripfeatures()
    {
        return $this->hasMany(TripFeature::class);
    }
}
