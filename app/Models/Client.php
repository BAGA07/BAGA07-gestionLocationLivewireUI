<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;


    public function location()
    {
        return $this->hasMany(Location::class, "location_id", "id");
    }
}
