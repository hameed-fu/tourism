<?php

namespace App\Models;

use App\Models\Room;
use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = ['no_room','hotel_name','facilities','contact','email','description','hotel_img','price_range','city_id'];
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
