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

         <style>
        .fa{
            font-size: 30px;
            width: 30px;
            text-align: center;
            border-radius: 50%;
            text-decoration: none;

        }

        p {
        	color: #fff;
        	font-family: 'Comfortaa', cursive;
        }

        h3 {
        	color: #fff;
        	font-family: 'Comfortaa', cursive;
        }

        img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
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
		 						 		<a href="{{route('archi')}}" type="btn" class="btn btn-danger">Close</a>

		 			</div>
		 		</div>
                </div>
		 		<br>

                
		 		<div class="container">
		 				<div class="row">

 


		 					 <?php foreach (json_decode($archi_pieces->images)as $picture) : ?>
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
                <li class="list-group-item">{{$archi_pieces->name}}</li>
                <li class="list-group-item">{{$archi_pieces->email}}</li>
                <li class="list-group-item">{{$archi_pieces->phone}}</li>
                <li class="list-group-item"><a href="{{$archi_pieces->website}}">{{$archi_pieces->website}}</a></li>
       
                   <!--   <li class="list-group-item active">Your profile is important as it will be displayed to potential employers or investors</li> -->
            </ul>
        </div>     
             	</div>

                      	<div class="col-sm">
                      		
        		 			   <div class="container container-fluid">
        		 		<h3 class="bg-info" style="padding: 10px; color: #fff; border-radius: 5px;">{{$archi_pieces->architectureName}}</h3>       
        		 		     <ul class="list-group">	   	
                <li class="list-group-item">{{$archi_pieces->architectureDesc}}</li>
            
              <!--   <li class="list-group-item active">Your profile is important as it will be displayed to potential employers or investors</li> -->
            </ul>
        </div>
                      	</div>
                      	
                      </div>


	
		 			<!-- <div class="row">
		 				<div class="col-sm">
		 					<h3 class="bg-primary" style="padding: 10px; color: #fff; border-radius: 5px;">Listed By:</h3>
		 									<div style="background-color: #000; padding: 10px;   border: 1px solid white;
  border-radius: 5px;">
		 					<p>{{$archi_pieces->name}}</p>
		 					<p>{{$archi_pieces->email}}</p>
		 					<p>{{$archi_pieces->phone}}</p>
		 					<p>{{$archi_pieces->website}}</p>
		 				</div>

		 				</div>

		 				<div class="col-sm">
		 									<div style="background-color: #000; padding: 10px;   border: 1px solid white;
  border-radius: 5px;">
		 			
		 				
		 				<h3>{{$archi_pieces->architectureName}}</h3>
		 		
		 				<p>{{$archi_pieces->architectureDesc}}</p>
		 		</div>
		 				</div>

		 			
		 			</div>

		 			<br>
		 		
                     

		 		</div>

		 	</div>
		 	
 -->
		 </div>







	</section>


                <div class="container" id="contact">
       <div class="jumbotron">
             <h3 class="container h-100 d-flex justify-content-center" style="font-family: 'Comfortaa', cursive; color: #000;"  >Get In Touch</h3>

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