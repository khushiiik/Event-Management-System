@extends('vandor.mastervendor')

@section('title')
<title>Profile</title>

@endsection




@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      {{-- <a class="bck" href="/packagedisplay">
        <span class="material-symbols-outlined">
          arrow_back
          </span></a> --}}
      <h1 class="h2 ml-5" >Profile</h1>
      
   
    </div>

<div>
<div class="container"> 

  <div class="">
  <div class="card h-100">
  <div class="card-body">
  <div class="row gutters">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <h6 class="mb-2 textC">Profile</h6>
  </div>
  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

  {{-- <div class="form-group"> --}}
    <form method="POST" action="{{route('formvendor')}}">
        @csrf
        {{-- <label for="text">Id</label>
        <input type="number" class="form-control form-box" id=" " name="vid" placeholder="001">
    </div>
  </div> --}}

  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    <div class="form-group">
        <label for="fullName">Name</label>
        <input type="text" class="form-control form-box" name="vname" id="fullName" placeholder="Name" minlength="4" required>
        <div class="invalid-feedback">
            Name must be at least 4 characters.
        </div>
    </div>
</div>

  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
  <div class="form-group">
  <label for="text">Age</label>
  <input type="number" class="form-control form-box" id=" " name="vage" placeholder="20">
  </div>
  </div>

  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    <div class="form-group">
        <label for="phoneNumber">Phone Number</label>
        <input type="tel" class="form-control form-box" name="vphno" id="phoneNumber" placeholder="Enter Phone Number" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>
        <div class="invalid-feedback">
            Phone number must be 10 digits.
        </div>
    </div>
</div>

<!-- Include SweetAlert2 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Get the phone number input field
    const phoneNumberInput = document.getElementById('phoneNumber');

    // Add event listener for input change
    phoneNumberInput.addEventListener('input', function() {
        // Get the value of the phone number input
        const phoneNumber = phoneNumberInput.value;

        // Check if phone number length is greater than 10
        if (phoneNumber.length > 10) {
            // Show SweetAlert2 pop-up for invalid phone number length
            Swal.fire({
                title: 'Invalid Phone Number',
                text: 'Phone number must be 10 digits.',
                icon: 'error'
            });

            // Trim the phone number to 10 digits
            phoneNumberInput.value = phoneNumber.slice(0, 10);
        }
    });
</script>


<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
  <div class="form-group">
      <label for="category">Category</label>
      <input type="text" class="form-control form-box" name="vcategory" id="category" placeholder="Category" minlength="4" required>
      <div class="invalid-feedback">
          Category must be at least 4 characters.
      </div>
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
    <button class="form-btnn" type="submit" >Upload</button>
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

