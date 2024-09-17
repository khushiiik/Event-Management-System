<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class bookevent extends Model
{
    use HasFactory;

    public function customer() : HasOne
    {
        return $this->hasOne(customers::class,'cid',"cid");
    }

    public function locations() : HasOne
    {
        return $this->hasOne(location::class,'lid',"lid");
    }

    protected $fillable=[
        "event_name","people_count","event_date","event_time","cid","lid","pid","status",
    ];
}