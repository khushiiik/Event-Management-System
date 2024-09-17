@extends('master')

@section('title')
<title>Package</title>
@endsection

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Packages</h1>
        <div>
            <a href="/packageform" style="text-decoration: none;">
                <button class="form-btnn">Add</button>
            </a>
        </div>
    </div>

    <div class="container">
        <table class="table align-middle mb-0 bg-white text-center">
            <thead style="background-color: #d44511; color: white; box-shadow: 5px 5px 5px rgb(123, 128, 129);">
                <tr>
                    <th>ID</th>
                    <th>Package Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    {{-- <th>View</th> --}}
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pac as $pack)
                <tr>
                    <td>{{$pack->id}}</td>
                    <td>{{$pack->p_name}}</td>
                    <td>{{$pack->p_description}}</td>
                    <td>{{$pack->p_price}}</td>
                    {{-- <td>
                        <a href="/editpackage/{{$pack->id}}" style="text-decoration: none;">
                            <button class="form-btnn">View</button>
                        </a>
                    </td> --}}
                    <td>
                        <a href="/editpackage/{{$pack->id}}" style="text-decoration: none;">
                            <button class="form-btnn">Edit</button>
                        </a>
                    </td>
                    <td>
                      <a href="#" onclick="confirmDelete({{$pack->id}})" style="text-decoration: none;">
                          <button class="form-btnn">Delete</button>
                      </a>
                  </td>
                  
                  <!-- Include SweetAlert2 JavaScript -->
                  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                  
                  <script>
                      function confirmDelete(packageId) {
                          // Show SweetAlert2 popup for Delete confirmation
                          Swal.fire({
                              title: 'Delete Confirmation',
                              text: 'Are you sure you want to delete this package?',
                              icon: 'warning',
                              showCancelButton: true,
                              confirmButtonColor: '#d33',
                              cancelButtonColor: '#3085d6',
                              confirmButtonText: 'Delete'
                          }).then((result) => {
                              if (result.isConfirmed) {
                                  // Redirect to delete route with package ID
                                  window.location.href = "/deletepackage/" + packageId;
                              }
                          });
                      }
                  </script>
                  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
