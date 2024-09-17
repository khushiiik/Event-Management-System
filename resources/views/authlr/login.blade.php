<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('imgs\Untitled_design-removebg-preview.png') }}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <style>
    /* body {
      background-image: url('WhatsApp Image 2024-02-10 at 18.20.11.jpeg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
     
    } */
    </style>
    
</head>
<body>
<!-- <h1>Hello-Bootstrap</h1> -->
<section class="vh-100" style="background-color: rgba(215, 209, 209, 0.578);">
  <div class="container py-5 h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;box-shadow: 10px 10px 5px rgba(62, 62, 62, 0.438);
        ">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="{{ asset('imgs/home3.jpg') }}"
                alt="login form" class="" style="border-radius: 1rem 0 0 1rem; height: 100.1%;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST" action="{{ route('login') }}"> 
                  @csrf                                                                                                           
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0"><img src="{{ asset('imgs/Untitled_design-removebg-preview.png') }}" style="width:70px; height: 64px;"><span> Dazzleevents</span></span>
                  </div>
                
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  <div class="form-outline mb-4">
                    <select id="role" name="role" class="form-control form-control-lg">
                      <option value="admin">Select</option>
                      <option value="admin">Admin</option>
                      <option value="vendor">Vendor</option>
                      <option value="user">User</option>
                    </select>
                    <label for="role">Role</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="email">Email address</label>
                  </div>
                
                  <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                    <input type="checkbox" class="form-label" onclick="myFunction()">Show Password
                  </div>
             
    

                  <div class="pt-1 mb-4">
                    <button class="btn btn-lg btn-block" type="submit" style="background-color: #a6430d;text-decoration: none; color: aliceblue;">Login</button>
                    <button class="btn btn-lg btn-block" type="button" style="background-color: #a6430d;"><a href="{{ route('register') }}" style="text-decoration: none; color: aliceblue;">Registration</a></button>
                  </div>
              
                  @if ($errors->has('email') || $errors->has('password'))
                  {{-- <div class="alert alert-danger" role="alert"> --}}
                      @if ($errors->has('email'))
                          <span class="text-danger">{{ $errors->first('email') }}</span><br>
                      @endif
                      @if ($errors->has('password'))
                          <span class="text-danger">{{ $errors->first('password') }}</span>
                      @endif
                  {{-- </div> --}}
              @endif
                </form>
                

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
          x.type = "text";
      } else {
          x.type = "password";
      }
  }
</script>

</body>
</html>