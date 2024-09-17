<?php

namespace App\Http\Controllers;

use App\Models\schedule;
use App\Models\Vendors;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            if(session()->get('user') != '' ){
                $ven = Vendors::all(); // Retrieve all items from the database
                // dd($ven);
                return view('/vancal', compact('ven'));
            }
            else{
                return redirect('login');
            }
            
        }
    }

    public function storevencal(Request $request)
    {
        $value=$request->validate([
            'event_name'=>'required',
            's_date'=>'required',
            's_time'=>'required'
        ]);

        // $uid = session()->get('user');
        $uid=session()->get('user');

        $sched=new schedule();
        $sched->event_name=$request->event_name;
        $sched->s_date=$request->s_date;
        $sched->s_time=$request->s_time;
        $sched->vid=$uid;
        $sched->save();
        // return redirect('packagedisplay');

    }

    public function venscheduledisplay()
    {
        $uid=session()->get('user');
        $displaydata = schedule::where('vid',$uid)->get();
        // dd($displaydata);
        return view('dashvendor',compact('displaydata'));
    }

    // public function storeadmincal(Request $request)
    // {
    //     $value=$request->validate([
    //         'event_name'=>'required',
    //         's_date'=>'required',
    //         's_time'=>'required'
    //     ]);

    //     // $uid = session()->get('user');
    //     $uid=session()->get('admin');

    //     $sched=new schedule();
    //     $sched->event_name=$request->event_name;
    //     $sched->s_date=$request->s_date;
    //     $sched->s_time=$request->s_time;
    //     $sched->vid=$uid;
    //     $sched->save();
    //     // return redirect('packagedisplay');

    // }

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
    public function show(schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(schedule $schedule)
    {
        //
    }
}
