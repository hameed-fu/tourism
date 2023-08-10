<?php

namespace App\Models;

use App\Models\Hotel;
use App\Models\RoomType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['room_no','roomtype_id','room_description','occupancy','availability','hotel_id'];
    
    public function roomtype()
    {
        return $this->belongsTo(RoomType::class);
    }
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
