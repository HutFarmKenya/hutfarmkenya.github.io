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
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">


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

        p {
        	color: #fff;
        	font-family: 'Comfortaa', cursive;
        }

        li {
        	color: #000;
        	font-family: 'Comfortaa', cursive;
        }

        
        .jumbotron{
          background-color: transparent;
        }

  
     </style>

</head>
<body>
	<br>
	<section>


		 <div class="container">
		 	<div class="jumbotron">
                <div class="container">
                	<div class="row">
		 			<div class="col-sm">
		 						 		<a href="{{route('housing')}}" type="btn" class="btn btn-danger">Close</a>

		 			</div>
		 		</div>
                </div>
		 		<br>

                
		 		<div class="container">
		 				<div class="row">
		 					 <?php foreach (json_decode($house_piece->images)as $picture) : ?>
		 		<div class="col-sm-3">

		 			  	<a target="_blank" href="{{ asset('/uploadImages/'.$picture) }}">
  <img class="img-thumbnail" src="{{ asset('/uploadImages/'.$picture) }}" alt="HutFarm">
</a>		 		
		 	</div>

	  <?php endforeach; ?>
		 			
		 		</div>
		 		<br>
		 		<div class="container">
		 			<div class="row">
		 				<div class="col-sm">
                                                                               <div class="container ">
<h3 class="bg-primary" style="padding: 10px; color: #fff; border-radius: 5px;">Listed By:</h3>            <ul class="list-group">
                <li class="list-group-item">{{$house_piece->name}}</li>
                <li class="list-group-item">{{$house_piece->email}}</li>
                <li class="list-group-item">{{$house_piece->phone}}</li>
                <li class="list-group-item"><a href="{{$house_piece->website}}">{{$house_piece->website}}</a></li>
                                <li class="list-group-item active">Property Information</li>

                     <li class="list-group-item"><span class="flaticon-bed">Number of Beds </span>{{$house_piece->houseBeds}}</li>
                 <li class="list-group-item"> <span class="flaticon-bathtub">Number of Bathrooms </span>{{$house_piece->houseBaths}}</li>
                <li class="list-group-item">Property Location: {{$house_piece->houseLocation}}</li>
                <li class="list-group-item">Property Status: {{$house_piece->houseStatus}}</li>
                <li class="list-group-item">Property Price Limit(KES): {{$house_piece->housePriceLimit}}</li>
       
            </ul>
        </div> 

		 				</div>

	
	
		 				</div>
		 			</div>
                     <br>
                     	<div class="row">
                     		<div class="col-sm">
                     					 				<p style="color: #000">{{$house_piece->houseDescription}}</p>

                     		</div>
		 			</div>
                     
		 			

		 		</div>

		 	</div>
		 	

		 </div>







	</section>


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