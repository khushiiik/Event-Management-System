<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use App\Models\customers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function storefeedback()
    // {
    //     $feed=feedback::with('customer')->get();
    //     dd($feed);
    // }

    /**
     * Show the form for creating a new resource.
     */

     function feedbackList()
     {
         $feedbacklist= feedback::with('customer')->get();
         // $feedbacklist->first->customer->cname;
         // return response([$feedbacklist->first->customer->customer->cname],200);
         return response($feedbacklist,200);
         // echo "<pre>";
         // print_r($feedbacklist);
         // echo "/pre>";
     }
 
     function addFeedback(Request $request)
     {
         $validatedData = $request->validate([
             'cid' => 'required|exists:customers,cid',
             'feedbacks' => 'required|string',
             // Add other validation rules for your feedback fields
         ]);
 
         $feedback = feedback::create([
             'cid' => $validatedData['cid'],
             'feedbacks' => $validatedData['feedbacks'],
             // Add other feedback fields
         ]);
 
         return response()->json(['message' => 'Feedback submitted successfully', 'data' => $feedback], 201);
     }
 


    public function create()
    {
        //
    }

    public function display(){

        $feedback = feedback::with('customer')->get();

        // dd($feedback);
        return view('feedbackdisplay',compact('feedback'));
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
    public function show(feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(feedback $feedback)
    {
        //
    }
}