<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    //use HasFactory;
    public function feedbacks()
    {
        return $this->hasMany(feedback::class,'cid',"cid");

    }

    protected $fillable=[
        "cname","cpass","cemail",
    ];

}