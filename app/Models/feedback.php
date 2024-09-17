<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    use HasFactory;

    public function customer() : HasOne
    {
        return $this->hasOne(customers::class,'cid',"cid");
    }

    protected $fillable=[
        "cid","feedbacks",
    ];

}
