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

        
        .jumbotron{
          background-color: transparent;
        }

  
     </style>
</head>
<body style="background-color: whitesmoke;">

   <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="navchoice" style="height: 50px; margin-bottom: 20px;">
        <div class="container">
          <a class="navbar-brand" href="{{route('welcome')}}">
            HutFarm
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="{{route('welcome')}}" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Upload To HutFarm</a></li>
              <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->
<br>
<br>
    <hr style="">

      <div class="row" style="padding: 10px;">
         <!-- property upload -->
               <div class="col-md-3">
         <div class="card mb-3 text-white bg-dark" >
            <img class="card-img-top" src='images/bg_2.jpg' alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title" style="color: #fff;">Housing</h5>
               <p class="card-text" >Browse our housing catalogue</p>
               <!--  -->
               <a href="{{route('housing')}}" class="btn btn-outline-light btn-sm">Go to Listing</a>

            </div>
         </div>
      </div>
            <!-- architecture -->
            <div class="col-md-3">
         <div class="card mb-3 text-white bg-dark" >
            <img class="card-img-top" src='images/archi.jpg' alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title" style="color: #fff;">Architecture</h5>
               <p class="card-text">Browse our Architecture catalogue</p>
               <a href="{{route('archi')}}" class="btn btn-outline-light btn-sm">Go to Listing</a>
            </div>
         </div>
      </div>
             <!-- Company Upload -->
            <div class="col-md-3">
         <div class="card mb-3 text-white bg-dark" >
            <img class="card-img-top" src='images/companies.jpg' alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title" style="color: #fff;">Construction Companies</h5>
               <p class="card-text">Browse our companies profiles.</p>
               <a href="{{route('company')}}" class="btn btn-outline-light btn-sm">Go to Listing</a>
            </div>
         </div>
      </div>
            <!-- blog upload -->
            <div class="col-md-3">
         <div class="card mb-3 text-white bg-dark" >
            <img class="card-img-top" src='images/work-7.jpg' alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title" style="color: #fff;">Blog</h5>
               <p class="card-text">Browse our blog posts</p>
               <a href="{{route('blogs')}}" class="btn btn-outline-light btn-sm">Go to Listing</a>
            </div>
         </div>
      </div>
 
                <div class="container" id="contact">
       <div class="jumbotron">
             <h3 class="container h-100 d-flex justify-content-center" style="font-family: 'Comfortaa', cursive;" >Get In Touch</h3>

          <!--the socials to get in touch-->
<div class="container h-100 d-flex justify-content-center">
    <a href="mailto:myemail@site.com?Subject=HutFarm%20inquiry" target="_blank" class="fa fa-envelope">   </a>

    <a href="https://www.instagram.com" target="_blank" class="fa fa-facebook">   </a>
    <a href="https://www.twitter.com" target="_blank" class="fa fa-twitter">  </a>
    <a href="https://www.facebook.com" target="_blank" class="fa fa-instagram">  </a>

</div>
       </div>
    </div>

  </body>
</html>