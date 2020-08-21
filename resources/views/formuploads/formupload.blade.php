<!DOCTYPE html>
<html>
<head>
	<title>ShowCase on HutFarm</title>
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
    <div class="container">
    	<div class="jumbotron">
    		 <form action="{{url('formupload')}}" method="post" enctype="multipart/form-data">
    		 	@csrf
    		 	<h2 class="page-header">Fill this form with the property details</h2>
            <hr>
            <div class="container">
 <p class="page-header" style="color: blue;">Contact Information <img src="{{ asset('images/contactinfo.png') }}" width="30" height="30" /></p>            
     <hr>
                    <div class="row">
      <div class="col">
          <input type="text" value="Houses" name="uploadHouse" class="form-control">
      </div>
     </div>
     <br>
              <div class="row">
              	<div class="col">
              		 <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="fullname" placeholder="Enter Name of Owner" required="">
              		
              	</div>
              	<div class="col">
 <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="Enter contact Email Address" required="">
              	</div>
              	</div>
<br>
 <div class="row">
              	<div class="col">
              		 <input type="phone" class="form-control" name="phone" placeholder="Enter contact Phone Number" required="">
              		
              	</div>
              	<div class="col">
 <input type="url" class="form-control" name="web" placeholder="website link" >
              	</div>
              	</div>
<br>
              	 <div class="row">
              	<div class="col">
              		<button class="btn btn-success btn-lg" type="button" style="color: #fff;" onclick="showhide('uploaddetails')">Next</button>
              		
              	</div>
            
              	</div>

              	<br>

              	   <div style="display: none; clear: both" id="uploaddetails">
                    <p class="page-header" style="color: blue;">Property Details <img src="{{ asset('images/iconhut.png') }}" width="30" height="30" /></p>
                    <hr>

                    <div class="row">
                    	<div class="col">
                    		<label for=propType>Property Type</label>
                    		  <select class="form-control" name="propType">
					  <option value="Houses">Houses</option>
					  <option value="Apartment">Apartment</option>
					  <option value="Bungalows">Bungalows</option>
					  		<option value="Mansions">Villa</option>

					</select>
                    	</div>

                    	<div class="col">
                    		<label for=locale>Enter Location</label>

                    		<input type="text" name="location" placeholder="Enter Location" class="form-control" >
                    	</div>
                  
                    	
                    </div>
                    <br>
                    <div class="row">
                    	<div class="col">
                    		<label for=propType>Enter Price Limit</label>

                    		<input type="number" name="pricelimit" placeholder="Enter Price Limit in KES" class="form-control" >
                    	</div>

                    	<div class="col">
                    		                    		<label for=propType>Property Status</label>

                    		  <select class="form-control" name="propstatus">
					  <option value="Houses">Rent</option>
					  <option value="Apartment">Sale</option>
					 >

					</select>               
					     	</div>
                    	
                    </div>
                     <br>
                    <div class="row">
                    	<div class="col">
                    		<label for="imagess">Select Property Images(2 or more)</label>
            <input type="file" name="my_file[]" class="form-control"  multiple>
                                	</div>
                                
                                	</div>

                                    <br>
                                	<div class="row">
                                		<div class="col">
                                			<button type="button" onclick="addUnits('addunits')" class="btn btn-warning btn-sm"> 
                                				Add Unit Information+
                                			</button>

                                		</div>
                                	</div>
                                      <br>
                                	   <div style="display: none; clear: both" id="addunits">
                                	   	<div class="row" >
                                	   		<div class="col">
                                	   			<input type="number" name="numberofbeds" placeholder="Number of Bedrooms" class="form-control" required>
                                	   		</div>
    
                                	   		<div class="col">
                                	   			<input type="number" name="numberofbaths" placeholder="Number of Bathrooms" class="form-control" required>
                                	   		</div>

                                	   		<div class="col">
                                	   			<input type="text" name="sizeofhouse" placeholder="e.g 1,878 sqft/N/A" class="form-control" required>
                                	   		</div>
                                	   	</div>
         <br>
                                	   	<div class="row">
                                	   		<div class="col">
                                	   			 <textarea class="form-control" rows="4" name="description" cols="10" placeholder="Describe the property environment
                        " required></textarea>
                                	   		</div>

                                	   	</div>
<br>
                                	   	<div class="row">
                                	   		<div class="col">
                                	   		   <input type="reset" value="Reset" class="btn btn-danger btn-lg" class="form-control">	
                                	   		   <input type="submit" name="save" value="Upload to HutFarm" class="btn btn-success btn-lg" class="form-control">	
                                	   		</div>
                                	   	</div>

                                	   	<br>


                       
                        </div>
                    </div>


                </div>



 </div>


    		 </form>
    		
    	</div>
    	

    </div>


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

<script type="text/javascript">
    function showhide(id) {
        let e = document.getElementById('uploaddetails');
        e.style.display = (e.style.display == 'block') ? 'none' : 'block';
        e.scrollIntoView();
    }


    function addUnits(id) {
        let e = document.getElementById('addunits');
        e.style.display = (e.style.display == 'block') ? 'none' : 'block';
        e.scrollIntoView();
    }

       function submitForm(id) {
        let e = document.getElementById('submitbtns');
        e.style.display = (e.style.display == 'block') ? 'none' : 'block';
        e.scrollIntoView();
    }
</script>

</body>
</html>