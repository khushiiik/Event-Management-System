<?php

namespace App\Http\Controllers;

use App\Models\servicesevent;
use App\Models\Vendors;
use Illuminate\Http\Request;

class ServiceseventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // function serviceList()
    // {
    //     $servicelist= servicesevent::all();
    //     return response($servicelist,200);
    // }
    public function index()
    {
        {
            if(session()->get('user') != '' ){
                $ven = Vendors::all(); // Retrieve all items from the database
                // dd($ven);
                return view('servicesform', compact('ven'));
            }
            else{
                return redirect('login');
            }
            
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

    public function addservice(Request $request)
    {
        // dd("hello");
        $value=$request->validate([
            'sname'=>'required',
            'sdescription'=>'required',
            'sprice'=>'required',
            // 'vid'=>'required'

        ]);
        // dd($value);

        $uid = session()->get('user');

        $ser=new servicesevent();
        $ser->sname=$request->sname;
        // $ser->vid = $request->vid ;
        $ser->sdescription=$request->sdescription;
        $ser->sprice=$request->sprice;
        $ser->vid=$uid;
        // dd($ser);
        $ser->save();
        return redirect("servicedisplay");
        // dd($ser);
    }

    public function add(){
        // dd("Hello");
    }

    /**
     * Display the specified resource.
     */

    public function show(servicesevent $servicesevent)
    {
        $uid=session()->get('user');
        $displaydata = servicesevent::where('vid',$uid)->get();
        // dd($displaydata);
        return view('servicedisplay',compact('displaydata'));
    }

    public function showserviceadmin(servicesevent $servicesevent)
    {
        // $uid=session()->get('user');
        $displaydata = servicesevent::all();
        // dd($displaydata);
        return view('vendordisplay',compact('displaydata'));
    }


    public function editservice($id)
    {

        
        $ser=servicesevent::find($id);
        return view('editservice',compact('ser'));

    }

    public function updateservice($id,Request $request)
    {

        $value=$request->validate([
            'sname'=>'required',
            'sdescription'=>'required',
            'sprice'=>'required',
            // 'vid'=>'required'

        ]);


        $ser=new servicesevent();
        $ser->sname=$request->sname;
        // $ser->vid = $request->vid ;
        $ser->sdescription=$request->sdescription;
        $ser->sprice=$request->sprice;

        // $ser->save();


        $ser->where('id',$id)->update($value);
        return redirect("servicedisplay");


    }



    public function deleteservice($id)
    {
        $ser=servicesevent::find($id)->delete();
        return redirect()->back();

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(servicesevent $servicesevent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, servicesevent $servicesevent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(servicesevent $servicesevent)
    {
        //
    }
}