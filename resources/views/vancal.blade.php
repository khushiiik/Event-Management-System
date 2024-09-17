@extends('vandor.mastervendor')

@section('title')
<title>Schedule</title>

@endsection




@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      {{-- <a class="bck" href="/packagedisplay">
        <span class="material-symbols-outlined">
          arrow_back
          </span></a> --}}
      <h1 class="h2 ml-5" >Schedule</h1>
      
   
    </div>

<div>
<div class="container"> 

  <div class="">
  <div class="card h-100">
  <div class="card-body">
  <div class="row gutters">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <h6 class="mb-2 textC">Schedule</h6>
  </div>
    <form method="POST" action="{{route('vancal')}}">
        @csrf
        


  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    <div class="form-group">
        <label for="fullName">Event Name</label>
        <input type="text" class="form-control form-box" name="event_name" id="fullName" placeholder="Name" minlength="4" required>
        <div class="invalid-feedback">
            Name must be at least 4 characters.
        </div>
    </div>
</div>

  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
  <div class="form-group">
  <label for="text">Date</label>
  <input type="date" class="form-control form-box" id=" " name="s_date" placeholder="" required>
  </div>
  </div>


<!-- Include SweetAlert2 JavaScript -->


<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
  <div class="form-group">
      <label for="category">Time</label>
      <input type="time" class="form-control form-box" name="s_time" id="category" placeholder="00:00"  required>
     
  </div>
</div>


  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
  <div class="form-group">
  <!-- <label for="website">Website URL</label>
  <input type="url" class="form-control" id="website" placeholder="Website url"> -->
  </div>
  </div>
  </div>
  <div class="row gutters">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  
  <div class="row gutters">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <div class="text-right">
  <a href="" style="text-decoration: none;">
    <button class="form-btnn" type="submit" >Create</button>
    </a>        </div>
</form>
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

