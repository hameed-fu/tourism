<?php

namespace App\Models;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TripType extends Model
{
    use HasFactory;
    protected $fillable = ['triptype_name','triptype_status'];

    public function trips()
    {
        return $this->hasOne(Trip::class);
    }
}
