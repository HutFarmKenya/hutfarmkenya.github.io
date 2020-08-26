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
        
        .jumbotron{
          background-color: transparent;
        }


        img {
           width: 100%;
           height: 200px;
        }

        p,h3 {
        	color: #fff;
        	font-family: 'Comfortaa', cursive;
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
		 						 		<a href="{{route('blogs')}}" type="btn" class="btn btn-danger">Close</a>

		 			</div>
		 		</div>
                </div>
		 		<br>

                
		 		<div class="container">
		 				<div class="row">
		 					 <?php foreach (json_decode($blog_pieces->images)as $picture) : ?>
		 		<div class="col-sm-3">
		 		<!-- 	<img src="{{ asset('/uploadImages/'.$picture) }}" alt="no image" class="img-thumbnail"> -->


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
<h3 class="bg-primary" style="padding: 10px; color: #fff; border-radius: 5px;">Posted By:</h3>            <ul class="list-group">
                <li class="list-group-item">{{$blog_pieces->name}}</li>
                <li class="list-group-item">{{$blog_pieces->email}}</li>
                <li class="list-group-item"><a href="{{$blog_pieces->website}}">{{$blog_pieces->website}}</a></li>
       
            </ul>
        </div> 

		 				</div>


		 			
		 			</div>

		 			<br>

		 			<div class="container">
		 					 			<div class="row">
		 					 				<div class="col-sm">
		 					 				 				<h3 class="bg-info" style="padding: 10px; color: #fff; border-radius: 5px;">{{$blog_pieces->blogTitle}}</h3>          
		 				  <ul class="list-group">
                <li class="list-group-item">{{$blog_pieces->blogDescription}}</li>
              
       
            </ul>	
		 					 				</div>
		
		 					
		 				</div>
		 				
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