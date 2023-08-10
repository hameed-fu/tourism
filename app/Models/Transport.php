<?php

namespace App\Models;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transport extends Model
{
    use HasFactory;
    protected $fillable = ['transport_name','transport_model','no_seats'];

    public function trip()
    {
        return $this->hasOne(Trip::class);
    }
}
