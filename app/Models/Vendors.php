<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendors extends Model
{
    use HasFactory;
    // protected $table = 'vendorregi';

    protected $fillable=[
        "vid","feedbacks","vname","vage","vphno","vcategory"
    ];
}
