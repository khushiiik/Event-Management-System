@extends('master')

@section('title')
<title>Events</title>

@endsection



@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">          
    <h1 class="h2" >Events</h1>
    
       <div class="">
  
        <a href="/packageform" style="text-decoration: none;">
          <button class="form-btnn" >Add</button>
          </a>
          
      
    </div> 
</div>

<div>

<div class="container"> 
    <table class="table align-middle mb-0 bg-white">
        <thead class="text-center" style="background-color: #d44511; color: white; box-shadow: 5px 5px 5px rgb(123, 128, 129);">
            <tr>
                <th>Date</th>
                <th>Event Time</th>
                <th>Event Name</th>
                <th>Location</th>
            </tr>
        </thead>
      
        <tbody>
            @foreach($data as $ub)
            <tr>
                <td>{{$ub->event_date}}</td>
                <td>{{$ub->event_time}}</td>
                <td>
                    <div class="d-flex align-items-center">
                     
                      <div class="ms-3">
                        <p class="fw-bold mb-1">{{$ub->event_name}}</p>
                      </div>
                    </div>
                  </td>

                 <td> {{$ub->locations->lname}}</td>

            </tr>

            @endforeach
                                      
        </tbody>
    </table>
<div>

</div>
</main>

@endsection