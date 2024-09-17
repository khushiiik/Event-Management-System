<?php

namespace App\Http\Controllers;

use App\Models\bookevent;
use App\Models\packages;
use App\Models\location;
use App\Models\customers;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookeventController extends Controller
{
    function booking(Request $request){
        // $validatedData = $request->validate([
        //     'event_name' => 'required|string',
        //     'people_count'=>'required',
        //     'event_date'=>'required',
        //     'event_time'=>'required',
        //     'cid' => 'required|exists:customers,cid',
        //     'lid'=>'required|exists:location,lid',
        //     'pid' => 'required|exists:packages,id'
        //     // Add other validation rules for your feedback fields
        // ]);



        // $bookings = bookevent::create([
        //     'event_name' => $validatedData['event_name'],
        //     'people_count' => $validatedData['people_count'],
        //     'event_date' => $validatedData['event_date'],
        //     'event_time' => $validatedData['event_time'],
        //     'cid' => $validatedData['cid'],
        //     'lid' => $validatedData['lid'],
        //     'pid' => $validatedData['id'],

            // Add other feedback fields
        // ]);

        $value= json_decode($request->getContent());
        $data = [] ;
        $data['event_name']=$value->event_name;
        $data['people_count']=$value->people_count;
        $data['event_date']=$value->event_date;
        $data['event_time']=$value->event_time;
        $data['cid']=$value->cid;
        $data['lid']=$value->lid;
        $data['pid']=$value->pid;
        $data['status']="pending";

        bookevent::create($data);

        return response()->json(['message' => 'Booking request sent successfully', 'data' => $data], 200);
    }



    public function display(){

        $booking=bookevent::get();
        // dd($booking);
        return view('dash',compact('booking'));
    }

    

   

    public function viewEvent($id){
        // dd($id);
        // $book = bookevent::where(['bid',$id])->first();
        $booking = bookevent::where('bid', $id)->first();

        // dd($book);
        return view('/requestView',compact('booking'));

    }
    
    public function acceptevent($bid)
    {
        // $book=bookevent::get(['bid',$bid]);
        bookevent::where('bid',$bid )->update(['status' => 'accepted']);
        return redirect()->back();
    }
    public function regectevent($bid)
    {
        // $book=bookevent::get(['bid',$bid]);
        bookevent::where('bid',$bid )->update(['status' => 'rejected']);
        return redirect()->back();
    }

    
    public function showAcceptedRequests()
    {
        $acceptedRequests = bookevent::where('status', 'accepted')->get();

        // return view('accepted-requests', ['acceptedRequests' => $acceptedRequests]);
        return view('/client',compact('acceptedRequests'));
        // dd($acceptedRequests);
    }

    function bookinglist(){
        $bookinglist= bookevent::with('customer')->get();
        // $feedbacklist->first->customer->cname;
        // return response([$feedbacklist->first->customer->customer->cname],200);
        return response()->json(['bookinglist' => $bookinglist, 'message' => 'Bookin list '], 200);
    }






    }
