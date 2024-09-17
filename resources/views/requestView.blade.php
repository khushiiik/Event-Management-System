@extends('master')

@section('title')
<title>Request</title>
@endsection

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <a class="bck" href="{{route('dash')}}">
            <span class="material-symbols-outlined">
                arrow_back
            </span>
        </a>
        <h1 class="h2 ml-5">Request</h1>
    </div>

    <div class="container">
        <div class="card h-100">
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-4">
                        <h6 class="mb-2"><span class="textC">Date:</span><br>{{$booking->event_date}}</h6><br>
                        <h6 class="mb-2"><span class="textC">Time:</span><br>{{$booking->event_time}}</h6><br>
                        <h6 class="mb-2"><span class="textC">Location:</span><br>{{$booking->locations->lname}}</h6><br>
                        <h6 class="mb-2"><span class="textC">People:</span><br>{{$booking->people_count}}</h6><br>
                        <h6 class="mb-2"><span class="textC">Name:</span><br>{{$booking->customer->cname}}</h6><br>
                        <h6 class="mb-2"><span class="textC">Event Type:</span><br>{{$booking->event_name}}</h6>
                    </div>

                    <div class="col-12 mt-4 text-right">
                      <div class="d-inline-block ml-auto">
                          <button class="form-btnn" id="acceptBtn">Accept</button>
                      </div>
                      <div class="d-inline-block">
                          <button class="form-btnn" id="rejectBtn">Reject</button>
                      </div>
                  </div>
                  
                  <!-- Include SweetAlert2 JavaScript -->
                  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                  
                  <script>
                      document.addEventListener('DOMContentLoaded', function() {
                          // Function to handle click on Accept button
                          document.getElementById('acceptBtn').addEventListener('click', function() {
                              // Show SweetAlert2 popup for Accept confirmation
                              Swal.fire({
                                  title: 'Accept Confirmation',
                                  text: 'Are you sure you want to accept this request?',
                                  icon: 'question',
                                  showCancelButton: true,
                                  confirmButtonColor: '#3085d6',
                                  cancelButtonColor: '#d33',
                                  confirmButtonText: 'Accept'
                              }).then((result) => {
                                  if (result.isConfirmed) {
                                      // Redirect to accept route if confirmed
                                      window.location.href = "/acceptedevent/{{$booking->bid}}";
                                  }
                              });
                          });
                  
                          // Function to handle click on Reject button
                          document.getElementById('rejectBtn').addEventListener('click', function() {
                              // Show SweetAlert2 popup for Reject confirmation
                              Swal.fire({
                                  title: 'Reject Confirmation',
                                  text: 'Are you sure you want to reject this request?',
                                  icon: 'question',
                                  showCancelButton: true,
                                  confirmButtonColor: '#d33',
                                  cancelButtonColor: '#3085d6',
                                  confirmButtonText: 'Reject'
                              }).then((result) => {
                                  if (result.isConfirmed) {
                                      // Redirect to reject route if confirmed
                                      window.location.href = "/rejectdevent/{{$booking->bid}}";
                                  }
                              });
                          });
                      });
                  </script>
                  
                  
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
