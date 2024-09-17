<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    {{-- <link rel="icon" href="{{ asset('imgs/logo.jpeg"') }}"> --}}

    <link rel="icon" type="image/x-icon" href="{{asset('imgs/Untitled_design-removebg-preview.png')}}">

    @yield('title')

    <link href="{{ asset('cssfiles/boot.min.css') }}" rel="stylesheet">

    <link href="{{ asset('cssfiles/dash.css') }}" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('cssfiles/style.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">



<style type="text/css">
    body {
margin: 0;
color: #2e323c;
background: #f5f6fa;
height: 100%;
}
/* ______calendar_________ */
.ftco-section {
    padding: 1em 0;
}
active-date {
    background: #CC4210;
    color: #fff;
}
/* ______END-calendar_________ */
.account-settings .user-profile {
margin: 0 0 1rem 0;
padding-bottom: 1rem;
text-align: center;
}
.account-settings .user-profile .user-avatar {
margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
width: 90px;
height: 90px;
-webkit-border-radius: 100px;
-moz-border-radius: 100px;
border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
margin: 0;
font-size: 0.8rem;
font-weight: 400;
color: #9fa8b9;
}
.account-settings .about {
margin: 2rem 0 0 0;
text-align: center;
}
.account-settings .about h5 {
margin: 0 0 15px 0;
color: #EF8210;
}
.account-settings .about p {
font-size: 0.825rem;
}
.form-control {
border: 1px solid #cfd1d8;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
font-size: .825rem;
background: #ffffff;
color: #2e323c;
}

.card {
background: #ffffff;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
border: 0;
margin-bottom: 1rem;
}
.textC{
color: #EF8210;
}

.obtn{
background-color: #CC4210; 
color: #ffffff;
}
.bck{

color: #CC4210;
border-radius: 50%;
height: 10%;
width: 2.4%;
text-decoration: none;
cursor: pointer;


}
</style>

</head>

<body>
  {{-- <p>{{session()->get('user')}}</p> --}}

{{-- ------------------------------nav---------------------------------------- --}}

<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Dazzleevents</a>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <button class="btnn" id="logout-btn" style="color: #f5f6fa">Sign out</button>
    </li>
  </ul>
</nav>

{{-- ---------------------------------------end nev---------------------------------------- --}}

<div class="container-fluid">
    <div class="row">

      
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
              <div class="sidebar-sticky">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="/dashvendor">
                      <span data-feather="home"></span>
                      Dashboard <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/vancal">
                      <span data-feather="file"></span>
                      Calendar
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/formvendor">
                      <span data-feather="users"></span>
                      Profile
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/servicesform">
                      <span data-feather="users"></span>
                      Services
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/servicedisplay">
                      <span data-feather="users"></span>
                      Services Details
                    </a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link" href="">
                      <span data-feather="bar-chart-2"></span>
                      Feedback Panel
                    </a>
                  </li> --}}
                  {{-- <li class="nav-item">
                    

                    <a class="nav-link" href="">
                      <span data-feather="layers"></span>
                      Package Panel
                      
                    </a>
                   
                  </li> --}}
                  {{-- <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="layers"></span>
                      Report Panel
                    </a>
                  </li> --}}
                </ul>
        
             
              </div>
            </nav>
        
        

    @yield("content")


    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../../../assets/js/vendor/popper.min.js"></script>
<script src="../../../../dist/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false,
      }
    }
  });
</script>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
  
</script>
<script>
    function displaySelectedImage(event, elementId) {
const selectedImage = document.getElementById(elementId);
const fileInput = event.target;

if (fileInput.files && fileInput.files[0]) {
    const reader = new FileReader();

    reader.onload = function(e) {
        selectedImage.src = e.target.result;
    };

    reader.readAsDataURL(fileInput.files[0]);
}
}
</script>
<script src="{{asset('jsfiles/jquery.min.js')}}"></script>
<script src="{{asset('jsfiles/popper.js')}}"></script>
<script src="{{asset('jsfiles/bootstrap.min.js')}}"></script>
<script src="{{asset('jsfiles/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var logoutBtn = document.getElementById('logout-btn');
  
    logoutBtn.addEventListener('click', function(event) {
      event.preventDefault();
  
      // Show SweetAlert2 confirmation dialog
      Swal.fire({
        title: 'Are you sure?',
        text: 'You will be logged out',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, logout'
      }).then((result) => {
        if (result.isConfirmed) {
          // Redirect to logout URL
          window.location.href = '/login';
        }
      });
    });
  });
  </script>
</body>
</html>