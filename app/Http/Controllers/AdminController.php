<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use App\Models\bookevent;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function upcomingAcceptedBookings()
     {
         // Get the current date
         $currentDate = Carbon::now()->month;
        //  dd($currentDate);
 
         // Get the start and end dates for the upcoming month
        //  $startOfMonth = $currentDate->startOfMonth();
        //  $endOfMonth = $currentDate->endOfMonth();
        //  dd($startOfMonth);
        // ->whe('event_date', [$startOfMonth, $endOfMonth])
        //  dd($endOfMonth);
        
         // Retrieve bookings that are accepted and scheduled for the upcoming month
         $ubooking = bookevent::where('status', 'accepted')->get();
         $lenth = count($ubooking);
        //  dd($lenth);
        // for ($i = 0; $i <$lenth; $i++){

        //     $eventdate = Carbon::parse($ubooking[i-1]->event_date)->month;
        //     if($currentDate == $eventdate);
        //     {
        //        $data = [] ; 
        //        $data.add($ubooking);
           
        //     }

        // }
        $data = array();

        foreach($ubooking as $iteam ){
            $dateOfMontrh = Carbon::parse($iteam->event_date)->month;
            // dd($dateOfMontrh);
            if($currentDate == $dateOfMontrh){
                // $data = [] ; 
                array_push($data,$iteam);
            }
        }
        
        //  dd($data);
        
 
         return view('/upcomingevent',compact('data'));
        //  return view('/upcomingevent', );
     }

  




    public function index()
    {
        {
            if(session()->get('admin') != '' ){
                return view('dash');
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

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
