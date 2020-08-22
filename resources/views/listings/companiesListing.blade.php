<!DOCTYPE html>
<html>
<head>
  <title>HutFarm</title>
  <!-- Latest compiled and minified CSS -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!--        icon library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

      <!-- social links styling -->
        <style>
        .fa{
            font-size: 30px;
            width: 30px;
            text-align: center;
            border-radius: 50%;
            text-decoration: none;

        }

        img {
           width: 100%;
           height: 200px;
        }
  
     </style>
</head>
<body style="background-color: whitesmoke;">

   <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="navchoice" style="height: 50px; margin-bottom: 20px;">
        <div class="container">
          <a class="navbar-brand" href="#">
            HutFarm Companies
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="{{route('listing_choice')}}" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Upload To HutFarm</a></li>
              <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->
<!-- end of navbar -->
<br>
<br>
<br>

<!--  -->
  <section>
    <div class="container">
  <div class="row">
  <div class="col-sm-4">
    <div class="card">
        <img class="card-img-top" src="images/bg_2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{route('company_details')}}" class="btn btn-primary">View Profile</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
              <img class="card-img-top" src="images/bg_2.jpg" alt="Card image cap">

      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{route('company_details')}}" class="btn btn-primary">View Profile</a>
      </div>
    </div>
  </div>
    <div class="col-sm-4">
    <div class="card">
              <img class="card-img-top" src="images/bg_2.jpg" alt="Card image cap">

      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{route('company_details')}}" class="btn btn-primary">View Profile</a>
      </div>
    </div>
  </div>
</div> 
      
    </div>
</div>
  </section>





</body>
</html>