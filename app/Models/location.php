<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;
    public function bookings()
    {
        return $this->hasMany(bookevent::class,'lid',"lid");


    }

    protected $fillable=[
        "lid","lname",
    ];
}
