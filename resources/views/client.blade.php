@extends('master')

@section('title')
<title>Clients</title>

@endsection



@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">          
    <h1 class="h2" >Clients</h1>
    
       <div class="">
  
    
          
      
    </div> 

    

  </div>

<div>
<div class="container"> 
<table class="table align-middle mb-0 bg-white">
<thead class="text-center" style="background-color: #d44511; color: white;   box-shadow: 5px 5px 5px rgb(123, 128, 129);
">
  <tr>
    <th>Date</th>
    <th>Time</th>
    <th>Name</th>
    <th>Event</th>
    <th>View</th>
    <th>Delete</th>
  </tr>
</thead>
@foreach($acceptedRequests as $accept)
<tbody>
  <tr>

    <td class="text-center">{{$accept->event_date}}</td>

    <td class="text-center">
      
       
        <div class="ms-3 text-center">
          <p class="fw-bold mb-1">{{$accept->event_time}}</p>
        </div>
    </td>
    <td class="text-center">
      <p class="fw-normal mb-1">{{$accept->customer->cname}}</p>
    </td>
  
    <td class="text-center">{{$accept->event_name}}</td>
   
    <td class="text-center">
      <a href="/clientView/{{$accept->bid}}" style="text-decoration: none;">
        <button class="form-btnn" >view</button>
        </a>
    </td>
 
    <td class="text-center">
      <a href="#" onclick="confirmDelete()" style="text-decoration: none;">
          <button class="form-btnn">Delete</button>
      </a>
  </td>
  
  <!-- Include SweetAlert2 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <script>
      function confirmDelete() {
          // Show SweetAlert2 popup for Delete confirmation
          Swal.fire({
              title: 'Delete Confirmation',
              text: 'Are you sure you want to delete this item?',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#3085d6',
              confirmButtonText: 'Delete'
          }).then((result) => {
              if (result.isConfirmed) {
                  // Perform delete action here
                  // Example: window.location.href = "/delete-item";
                  // Replace "/delete-item" with the actual delete route
                  // or call your delete function here
                  // Example: deleteItem(itemId);
              }
          });
      }
  </script>
  
    
    <tr>
        
</tbody>
@endforeach 
</table>
<div>

</div>
</main>

@endsection