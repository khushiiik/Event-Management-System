<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('imgs/Untitled_design-removebg-preview.png') }}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <style>
    .col-lg-7 {
      flex: 0 0 auto;
      width: 53.333333%;
    }
    .col-lg-5 {
      flex: 0 0 auto;
      width: 45.666667%;
    }
    .mb-4 {
      margin-bottom: 0.5rem !important;
    }
  </style>  
</head>
<body>
<section class="vh-100" style="background-color: rgba(215, 209, 209, 0.578);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;box-shadow: 10px 10px 5px rgba(62, 62, 62, 0.438);">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="{{ asset('imgs/home3.jpg') }}" alt="login form" style="border-radius: 1rem 0 0 1rem; height: 100.1%;" />
            </div>
            <div class="col-md-2 col-lg-7 d-flex align-items-center">
              <div class="card-body p-1 p-lg-3 text-black">
                <form method="POST" action="{{ route('register') }}" id="registerForm">
                  @csrf
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0"><img src="{{ asset('imgs/Untitled_design-removebg-preview.png') }}" style="width:70px; height: 64px;"><span> Dazzleevents</span></span>
                  </div>
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register yourself</h5>
                  <div class="form-outline mb-4">
                    <input type="text" id="name" name="name" class="form-control form-control-lg" required>
                    <label class="form-label" for="name">Name</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" required>
                    <label class="form-label" for="email">Email address</label>
                  </div>
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
                    <input type="password" id="password" name="password" class="form-control form-control-lg" required>
                    <input type="checkbox" class="form-label" onclick="togglePasswordVisibility()">Show Password
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" required>
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                    <span id="passwordMismatch" style="color: red; display: none;">Passwords do not match</span>
                </div>
                <span id="passwordStrength"></span>
                  <div class="pt-1 mb-4">
                    <button type="submit" class="btn btn-lg btn-block" style="background-color: #a6430d; color: aliceblue; text-decoration: none;">Register</button>
                  </div>
                  {{-- <a class="small text-muted" href="#!">Forgot password?</a> --}}
                  


                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function togglePasswordVisibility() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  
    document.getElementById('registerForm').addEventListener('submit', function(event) {
      var password = document.getElementById('password').value;
      var confirmPassword = document.getElementById('password_confirmation').value;
      var passwordMismatch = document.getElementById('passwordMismatch');
  
      if (password !== confirmPassword) {
        passwordMismatch.style.display = 'block';
        event.preventDefault(); // Prevent form submission
      } else {
        passwordMismatch.style.display = 'none';
      }
    });
  </script>

<script>
  document.getElementById('password').addEventListener('input', function () {
      var password = this.value;
      var passwordStrength = document.getElementById('passwordStrength');

      var containsUppercase = /[A-Z]/.test(password);
      var containsLowercase = /[a-z]/.test(password);
      var containsNumber = /[0-9]/.test(password);
      var containsSpecialCharacter = /[_\W]/.test(password);

      if (password.length >= 8 && containsUppercase && containsLowercase && containsNumber && containsSpecialCharacter) {
          passwordStrength.textContent = 'Password strength: Strong';
          passwordStrength.style.color = 'green';
      } else {
          passwordStrength.textContent = 'Password must be at least 8 characters long and contain at least one A,a,1,_';
          passwordStrength.style.color = 'red';
      }
  });
</script>
</body>
</html>
