<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;
    protected $fillable = ['room_type'];
    public function room()
    {
        return $this->hasMany(Room::class);
    }

    public function booking()
    {
        return $this->hasOne(Booking::class);
    }
}
