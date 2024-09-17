@extends('master')

@section('title')
<title>Edit Service</title>

@endsection




@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      <a class="bck" href="/servicedisplay">
        <span class="material-symbols-outlined">
          arrow_back
          </span></a>
      <h1 class="h2 ml-5" >Edit Service</h1>
      

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
    <form method="POST" action="{{route('updateservice',$ser->id)}}">
        @csrf
        
        {{-- <select name="vid" id="vid">
            @foreach($ven as $vend)
            
                <option value="{{ $vend->vid }}"> {{ $vend->vcname }}</option>
            @endforeach
        </select> --}}
        <label for="fullName">Service Name</label>
        <input type="text"class="form-control form-box" name="sname"  placeholder="service name" value="{{$ser->sname}}" required>
    </div>
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control form-box" name="sdescription"  placeholder="service description" value="{{$ser->sdescription}}" required>
    </div>
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    <div class="form-group">
        <label for="description">Price</label>
        <input type="Number" name="sprice" class="form-control form-box" placeholder="service price" value="{{$ser->sprice}}">
    </div>
</div>
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="text-right">
    
        <button class="form-btnn" type="submit" style="text-decoration: none;" >Submit</button>
    </div>
    </div>

    </form>
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
