<?php

namespace App\Http\Controllers;

use App\Models\adminschedule;
use Illuminate\Http\Request;

class AdminscheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function storeadmincal(Request $request)
    {
        $value=$request->validate([
            'event_name'=>'required',
            's_date'=>'required',
            's_time'=>'required'
        ]);

        // $uid = session()->get('user');
        // $uid=session()->get('user');

        $sched=new adminschedule();
        $sched->event_name=$request->event_name;
        $sched->s_date=$request->s_date;
        $sched->s_time=$request->s_time;
        // $sched->vid=$uid;
        $sched->save();
        // return redirect('packagedisplay');

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
    public function show(adminschedule $adminschedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(adminschedule $adminschedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, adminschedule $adminschedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(adminschedule $adminschedule)
    {
        //
    }
}
