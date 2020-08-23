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

        img {
           width: 100%;
           height: 200px;
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
		 			<img src="{{ asset('/architectureimages/'.$picture) }}" alt="..." class="img-thumbnail">
		 		
		 	</div>

	  <?php endforeach; ?>
		 			
		 		</div>
		 		<br>
		 		<div class="container">
		 			<div class="row">
		 				<div class="col-sm">
		 					<p>{{$archi_pieces->name}}</p>
		 					<p>{{$archi_pieces->email}}</p>
		 					<p>{{$archi_pieces->phone}}</p>
		 					<p>{{$archi_pieces->website}}</p>

		 				</div>

		 				<div class="col-sm">
		 						<div class="row">
		 				
		 				<h3>{{$archi_pieces->architectureName}}</h3>
		 			</div>

		 			<div class="row">
		 				<p>{{$archi_pieces->architectureDesc}}</p>
		 			</div>
		 				</div>

		 			
		 			</div>

		 			<br>
		 		
                     

		 		</div>

		 	</div>
		 	

		 </div>







	</section>



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