<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\location;

class locationcontroller extends Controller
{

    function locationList()
    {
        $locationlist= location::all();
        return response()->json(['locationlist' => $locationlist, 'message' => 'location list '], 200);
    }
    public function storelocation(Request $request)
    {
        $value=$request->validate([
            'lname'=>'required',

        ]);

        $loc=new location();
        $loc->lname=$request->lname;
        // dd($loc);
        $loc->save();
    }

    public function displayloc(){

        $loc=location::all();
        return view('locationdisplay',compact('loc'));
    }

}