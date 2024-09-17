@extends('master')

@section('title')
<title>Clients View</title>

@endsection


@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          
    <div class="d-flex flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      <a class="bck" href="">
        <span class="material-symbols-outlined">
          arrow_back
          </span></a>
      <h1 class="h2 ml-5" >Client Detail</h1>
      
      <!-- <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button class="btn btn-sm btn-outline-secondary">Share</button>
          <button class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
         <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar"></span>
          This week
        </button>
      </div> -->
    </div>

<div>
<div class="container"> 

  <div class="">
  <div class="card h-100">
    
  <div class="card-body">
    
  <div class="row gutters">

    
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
  
 
  {{-- <h4 class="mb-2 textC">Silver Wedding Package</h4> --}}
  
  </div>
  
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-4">
    <h6 class="mb-2"><span class="textC">Date:</span><br>{{$booking->event_date}}</h6><br>
    <h6 class="mb-2"><span class="textC">Time:</span><br>{{$booking->event_time}}</h6><br>
    <h6 class="mb-2"><span class="textC">Location:</span><br>{{$booking->locations->lname}}</h6><br>
    <h6 class="mb-2"><span class="textC">People:</span><br>{{$booking->people_count}}</h6><br>
    <h6 class="mb-2"><span class="textC">Name:</span><br>{{$booking->customer->cname}}</h6><br>
    <h6 class="mb-2"><span class="textC">Event Type:</span><br>{{$booking->event_name}}</h6>
</div>

{{-- 
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-4">
     <h6 class="mb-2" style="color: rgb(38, 31, 30);">
        Silver Wedding Package 
      </h6>
  
   
  </div> --}}
  {{-- <div class="pr-3 pt-4">
    <a href="" style="text-decoration: none;">
      <button class="form-btnn" >Accept</button>
      </a>
    </div> --}}
    <div class="pr-3 pt-4">
      <a href="#" style="text-decoration: none;">
      <button class="form-btnn" >Delete</button>
      </a>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</div>
    </div>
<div>

</div>
  </main>


@endsection