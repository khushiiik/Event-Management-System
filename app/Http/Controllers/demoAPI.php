<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoAPI extends Controller
{
    //
    function getData()
    {
        return ["name"=>"nehal","email"=>"nehal@gmail.com"];
    }
}