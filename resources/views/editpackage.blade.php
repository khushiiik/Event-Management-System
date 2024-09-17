@extends('master')

@section('title')
<title>Edit Package</title>

@endsection




@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      <a class="bck" href="/packagedisplay">
        <span class="material-symbols-outlined">
          arrow_back
          </span></a>
      <h1 class="h2 ml-5" >Edit Package</h1>
      

    </div>

<div>
<div class="container"> 

  <div class="">
  <div class="card h-100">
  <div class="card-body">
  <div class="row gutters">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <h6 class="mb-2 textC">Package Details</h6>
  </div>
  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
  <div class="form-group">
    <form method="POST" action="{{route('updatepackage',$pac->id)}}">
       
        @csrf
  <label for="fullName">Package Name</label>
  <input type="text" class="form-control form-box" id="fullName"  value="{{$pac->p_name}}" name="p_name">
  </div>
  </div>

 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control form-box" id="price" value="{{$pac->p_price}}" name="p_price" min="0" required>
        <div class="invalid-feedback">
            Price must be greater than 0.
        </div>
    </div>
</div>

<!-- Include SweetAlert2 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Get the price input field
    const priceInput = document.getElementById('price');

    // Add event listener for input change
    priceInput.addEventListener('input', function() {
        // Get the value of the price input
        const price = parseFloat(priceInput.value);

        // Check if price is less than or equal to 0
        if (price <= 0) {
            // Show SweetAlert2 popup for invalid price
            Swal.fire({
                title: 'Invalid Price',
                text: 'Price must be greater than 0.',
                icon: 'error'
            });
            // Reset the price input value to 0
            priceInput.value = 0;
        }
    });
</script>


  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
  <div class="form-group">
  <label for="text">Description</label>
  <input type ="text" class="form-control form-box"name="p_description" value="{{$pac->p_description}}" id="exampleFormControlTextarea1" rows="3" style="width: 1070px;">

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
  
    <button class="form-btnn" type="submit" style="text-decoration: none;" >Update</button>
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

