@extends('master')

@section('title')
    <title>Dashboard</title>
@endsection

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div>
                {{-- <a href="/pkgform" style="text-decoration: none;">
                    <button class="form-btnn">Add</button>
                </a> --}}
            </div>
        </div>

        <div class="container">
            {{-- <div class="row"> --}}
                {{-- <div class="col-md-6"> --}}
                    <!-- Table 1 -->
                    {{-- <h4 style="color: darkgrey; text-align:end;">Upcoming Events</h4>
                    
                </div> --}}
                {{-- <div class="col-md-6"> --}}
                    <!-- Table 2 -->
                    <h4 style="color: darkgrey; text-align:start;">Booking Requests</h4>

                    <table class="table align-middle mb-0 bg-white">
                        <thead class="text-center" style="background-color: #d44511; color: white; box-shadow: 5px 5px 5px rgb(123, 128, 129);">
                            <tr>
                                <th>Date</th>
                                <th>Event Time</th>
                                <th>Event Name</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        @foreach($booking as $book)
                        <tbody>
                            <tr>
                                <td class="align-middle text-center">{{$book->event_date}}</td>
                                <td class="align-middle text-center">{{$book->event_time}}</td>
                                

                                <td class="align-middle">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">{{$book->event_name}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <a href="/viewEvent/{{$book->bid}}" style="text-decoration: none;">
                                        <button class="form-btnn">View</button>
                                    </a>
                                </td>
                            </tr>  
                        </tbody>
                        
                         @endforeach  
                      
                        
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
