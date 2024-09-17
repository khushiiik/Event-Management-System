@extends('vandor.mastervendor')
@section('title')
<title>Package</title>
@endsection
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      {{-- <a class="bck" href="#">
        <span class="material-symbols-outlined">
          arrow_back
          </span></a> --}}
      <h1 class="h2 ml-5" >Service Form</h1>
      </div>
<div>
<div class="container"> 
<div class="">
  <div class="card h-100">
  <div class="card-body">
  <div class="row gutters">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <h6 class="mb-2 textC">Service Details</h6>
  </div>
  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

  <div class="form-group">
    <form method="POST" action="{{route('storeservice')}}">
        @csrf
        
  <label for="fullName">Service Name</label>
  <input type="text" class="form-control form-box" name="sname" id="fullName" placeholder="Package Name">
  </div>
  </div>

  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
  <div class="form-group">
  <label for="number">Service Price</label>
  <input type="number" class="form-control form-box" id=" " name="sprice" placeholder="Enter Package Price">
  </div>
  </div>

  {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    <div class="form-group">

      <label for="number"></label>
  <input type="number" class="form-control form-box" id=" " name="sprice" placeholder="Enter Package Price">
      
    </div>
    </div> --}}



  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
  <div class="form-group">
  <label for="text">Service Description</label>
  <textarea class="form-control form-box" name="sdescription" id="exampleFormControlTextarea1" rows="3" style="width: 520px;"></textarea>

  </div>
  </div>
  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
  <div class="form-group">

  </div>
  </div>
  </div>
  <div class="row gutters">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  
  <div class="row gutters">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <div class="text-right">
  <a href="/pkg" style="text-decoration: none;">
    <button class="form-btnn" type="submit" >Add</button>
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

