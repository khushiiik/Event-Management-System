<?php

namespace App\Http\Controllers;

use App\Models\Vendors;
use App\Models\Users;
use Illuminate\Http\Request;

class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function storevendorinfo(Request $request)
     {
         $value=$request->validate([
             'vname'=>'required',
             'vage'=>'required',
             'vphno'=>'required',
             'vcategory'=>'required',
             'vid'=>'required'
         ]);

        //  $uid = session()->get('user');
 
         $v=new Vendors();
        //  $v->vid=$uid;
         $v->vname=$request->vname;
         $v->vage=$request->vage;
         $v->vphno=$request->vphno;
         $v->vcategory=$request->vcategory;
         $v->save();
         dd($v);
        //  return redirect('formvendor');
 
     }

     public function vendisplay()
    {
        $ven=Vendors::all();
        return view('vendordisplay',compact('ven'));
    }

    public function index()
    {
        if(session()->get('user') != '' ){
            return view('dashvendor');
        }
        else{
            return redirect('login');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendors $vendors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendors $vendors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendors $vendors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendors $vendors)
    {
        //
    }
}
