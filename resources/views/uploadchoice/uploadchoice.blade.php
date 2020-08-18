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
            HutFarm
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Listing</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
              <li class="nav-item"><a href="{{route('logout')}}" class="nav-link">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->

    <hr style="">
    <?php foreach ( $users as $users ) : ?>
    <p style="padding: 10px;"><strong>Hello {{$users->name}}, select Upload Category</strong></p>
   
    <hr style="">

      <div class="row" style="padding: 10px;">
         <!-- property upload -->
               <div class="col-md-3">
         <div class="card mb-3 text-white bg-dark" >
            <img class="card-img-top" src='images/bg_2.jpg' alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Housing</h5>
               <p class="card-text">Showcase ypur housing properties. Upload apartments,bungalows,mansions e.t.c</p>
               <!--  -->
               <a href="#" class="btn btn-outline-light btn-sm">Upload</a>

            </div>
         </div>
      </div>
            <!-- architecture -->
            <div class="col-md-3">
         <div class="card mb-3 text-white bg-dark" >
            <img class="card-img-top" src='images/archi.jpg' alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Architecture</h5>
               <p class="card-text">Are you an architect? .Advertise your Architectural designs on HutFarm for exposure to our browsers</p>
               <a href="#" class="btn btn-outline-light btn-sm">Upload</a>
            </div>
         </div>
      </div>
             <!-- Company Upload -->
            <div class="col-md-3">
         <div class="card mb-3 text-white bg-dark" >
            <img class="card-img-top" src='images/companies.jpg' alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Construction Company Showcase</h5>
               <p class="card-text">Upload Companies Portfolio on HutFarm.</p>
               <a href="#" class="btn btn-outline-light btn-sm">Upload</a>
            </div>
         </div>
      </div>
            <!-- blog upload -->
            <div class="col-md-3">
         <div class="card mb-3 text-white bg-dark" >
            <img class="card-img-top" src='images/work-7.jpg' alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Blog</h5>
               <p class="card-text">Contribute to HutFarm's blog post on issues property, architecture and construction companies.</p>
               <a href="http://www.jquery2dotnet.com/" class="btn btn-outline-light btn-sm">Upload</a>
            </div>
         </div>
      </div>
 
 <?php endforeach; ?>
    <div class="container" id="contact">
       <div class="jumbotron">
             <h3 class="container h-100 d-flex justify-content-center" style="font-family: 'Comfortaa', cursive;" >Get In Touch</h3>

          <!--the socials to get in touch-->
<div class="container h-100 d-flex justify-content-center">
    <a href="https://www.instagram.com" target="_blank" class="fa fa-envelope">   </a>

    <a href="https://www.instagram.com" target="_blank" class="fa fa-facebook">   </a>
    <a href="https://www.twitter.com" target="_blank" class="fa fa-twitter">  </a>
    <a href="https://www.facebook.com" target="_blank" class="fa fa-instagram">  </a>

</div>
       </div>
    </div>


  </body>
</html>