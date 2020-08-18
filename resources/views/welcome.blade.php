<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HutFarm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
  </head>
  <body>
    
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="#">                <img src="{{asset('images/iconhut.png')}}" style="width: 100px; height: 100px;">
</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Listing</a></li>
              <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Upload To HutFarm</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <br><br><br><br>
        <div class="container">
              <div class="jumbotron" id="jumboLead" style="background: none;">
            <div class="container">
                <div class="row">
                       <div class="col">
                        <p style="color: #fff;">
                            <strong>
                                  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                            </strong>
                          
                        </p>
                    </div>
                </div>
            </div>
        </div>  
        </div>
 

    </div>


    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <div class="search-wrap-1 ftco-animate">
                            <form action="#" class="search-property-1">
                        <div class="row">
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Location</label>
                                <div class="form-field">
                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                <input type="text" class="form-control" placeholder="City/Locality Name">
                              </div>
                          </div>
                            </div>
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Property Type</label>
                                    <div class="form-field">
                                    <div class="select-wrap">
                              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                              <select name="" id="" class="form-control">
                                <option value="">Type</option>
                                <option value="">Commercial</option>
                                <option value="">- Office</option>
                                <option value="">Residential</option>
                                <option value="">Villa</option>
                                <option value="">Condominium</option>
                                <option value="">Apartment</option>
                              </select>
                            </div>
                              </div>
                          </div>
                            </div>
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Property Status</label>
                                    <div class="form-field">
                                    <div class="select-wrap">
                              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                              <select name="" id="" class="form-control">
                                <option value="">Type</option>
                                <option value="">Rent</option>
                                <option value="">Sale</option>
                              </select>
                            </div>
                              </div>
                          </div>
                            </div>
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Price Limit</label>
                                    <div class="form-field">
                                    <div class="select-wrap">
                              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                              <select name="" id="" class="form-control">
                                <option value="">$5,000</option>
                                <option value="">$10,000</option>
                                <option value="">$50,000</option>
                                <option value="">$100,000</option>
                                <option value="">$200,000</option>
                                <option value="">$300,000</option>
                                <option value="">$400,000</option>
                                <option value="">$500,000</option>
                                <option value="">$600,000</option>
                                <option value="">$700,000</option>
                                <option value="">$800,000</option>
                                <option value="">$900,000</option>
                                <option value="">$1,000,000</option>
                                <option value="">$2,000,000</option>
                              </select>
                            </div>
                              </div>
                          </div>
                            </div>
                            <div class="col-lg align-self-end">
                                <div class="form-group">
                                    <div class="form-field">
                                <input type="submit" value="Search Property" class="form-control btn btn-primary">
                              </div>
                          </div>
                            </div>
                        </div>
                    </form>
                </div>
                    </div>
            </div>
        </div>
    </section>

    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">What we offer</span>
            <h2 class="mb-2">Exclusive Offer For You</h2>
          </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="property-wrap ftco-animate">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/work-1.jpg);">
                        <a href="properties-single.html" class="icon d-flex align-items-center justify-content-center btn-custom">
                            <span class="ion-ios-link"></span>
                        </a>
                        <div class="list-agent d-flex align-items-center">
                            <a href="#" class="agent-info d-flex align-items-center">
                                <div class="img-2 rounded-circle" style="background-image: url(images/person_1.jpg);"></div>
                                <h3 class="mb-0 ml-2">Ben Ford</h3>
                            </a>
                            <div class="tooltip-wrap d-flex">
                                <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Bookmark">
                                    <span class="ion-ios-heart"><i class="sr-only">Bookmark</i></span>
                                </a>
                                <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Compare">
                                    <span class="ion-ios-eye"><i class="sr-only">Compare</i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text">
                        <p class="price mb-3"><span class="old-price">800,000</span><span class="orig-price">$3,050<small>/mo</small></span></p>
                        <h3 class="mb-0"><a href="properties-single.html">Blue View Home</a></h3>
                        <span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i>2854 Meadow View Drive, Hartford, USA</span>
                        <ul class="property_list">
                            <li><span class="flaticon-bed"></span>3</li>
                            <li><span class="flaticon-bathtub"></span>2</li>
                            <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="property-wrap ftco-animate">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/work-2.jpg);">
                        <a href="properties-single.html" class="icon d-flex align-items-center justify-content-center btn-custom">
                            <span class="ion-ios-link"></span>
                        </a>
                        <div class="list-agent d-flex align-items-center">
                            <a href="#" class="agent-info d-flex align-items-center">
                                <div class="img-2 rounded-circle" style="background-image: url(images/person_1.jpg);"></div>
                                <h3 class="mb-0 ml-2">Ben Ford</h3>
                            </a>
                            <div class="tooltip-wrap d-flex">
                                <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Bookmark">
                                    <span class="ion-ios-heart"><i class="sr-only">Bookmark</i></span>
                                </a>
                                <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Compare">
                                    <span class="ion-ios-eye"><i class="sr-only">Compare</i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text">
                        <p class="price mb-3"><span class="old-price">800,000</span><span class="orig-price">$3,050<small>/mo</small></span></p>
                        <h3 class="mb-0"><a href="properties-single.html">Blue View Home</a></h3>
                        <span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i>2854 Meadow View Drive, Hartford, USA</span>
                        <ul class="property_list">
                            <li><span class="flaticon-bed"></span>3</li>
                            <li><span class="flaticon-bathtub"></span>2</li>
                            <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="property-wrap ftco-animate">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/work-3.jpg);">
                        <a href="properties-single.html" class="icon d-flex align-items-center justify-content-center btn-custom">
                            <span class="ion-ios-link"></span>
                        </a>
                        <div class="list-agent d-flex align-items-center">
                            <a href="#" class="agent-info d-flex align-items-center">
                                <div class="img-2 rounded-circle" style="background-image: url(images/person_1.jpg);"></div>
                                <h3 class="mb-0 ml-2">Ben Ford</h3>
                            </a>
                            <div class="tooltip-wrap d-flex">
                                <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Bookmark">
                                    <span class="ion-ios-heart"><i class="sr-only">Bookmark</i></span>
                                </a>
                                <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Compare">
                                    <span class="ion-ios-eye"><i class="sr-only">Compare</i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text">
                        <p class="price mb-3"><span class="old-price">800,000</span><span class="orig-price">$3,050<small>/mo</small></span></p>
                        <h3 class="mb-0"><a href="properties-single.html">Blue View Home</a></h3>
                        <span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i>2854 Meadow View Drive, Hartford, USA</span>
                        <ul class="property_list">
                            <li><span class="flaticon-bed"></span>3</li>
                            <li><span class="flaticon-bathtub"></span>2</li>
                            <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="property-wrap ftco-animate">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/work-4.jpg);">
                        <a href="properties-single.html" class="icon d-flex align-items-center justify-content-center btn-custom">
                            <span class="ion-ios-link"></span>
                        </a>
                        <div class="list-agent d-flex align-items-center">
                            <a href="#" class="agent-info d-flex align-items-center">
                                <div class="img-2 rounded-circle" style="background-image: url(images/person_1.jpg);"></div>
                                <h3 class="mb-0 ml-2">Ben Ford</h3>
                            </a>
                            <div class="tooltip-wrap d-flex">
                                <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Bookmark">
                                    <span class="ion-ios-heart"><i class="sr-only">Bookmark</i></span>
                                </a>
                                <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Compare">
                                    <span class="ion-ios-eye"><i class="sr-only">Compare</i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text">
                        <p class="price mb-3"><span class="old-price">800,000</span><span class="orig-price">$3,050<small>/mo</small></span></p>
                        <h3 class="mb-0"><a href="properties-single.html">Blue View Home</a></h3>
                        <span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i>2854 Meadow View Drive, Hartford, USA</span>
                        <ul class="property_list">
                            <li><span class="flaticon-bed"></span>3</li>
                            <li><span class="flaticon-bathtub"></span>2</li>
                            <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="property-wrap ftco-animate">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/work-5.jpg);">
                        <a href="properties-single.html" class="icon d-flex align-items-center justify-content-center btn-custom">
                            <span class="ion-ios-link"></span>
                        </a>
                        <div class="list-agent d-flex align-items-center">
                            <a href="#" class="agent-info d-flex align-items-center">
                                <div class="img-2 rounded-circle" style="background-image: url(images/person_1.jpg);"></div>
                                <h3 class="mb-0 ml-2">Ben Ford</h3>
                            </a>
                            <div class="tooltip-wrap d-flex">
                                <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Bookmark">
                                    <span class="ion-ios-heart"><i class="sr-only">Bookmark</i></span>
                                </a>
                                <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Compare">
                                    <span class="ion-ios-eye"><i class="sr-only">Compare</i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text">
                        <p class="price mb-3"><span class="old-price">800,000</span><span class="orig-price">$3,050<small>/mo</small></span></p>
                        <h3 class="mb-0"><a href="properties-single.html">Blue View Home</a></h3>
                        <span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i>2854 Meadow View Drive, Hartford, USA</span>
                        <ul class="property_list">
                            <li><span class="flaticon-bed"></span>3</li>
                            <li><span class="flaticon-bathtub"></span>2</li>
                            <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="property-wrap ftco-animate">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/work-6.jpg);">
                        <a href="properties-single.html" class="icon d-flex align-items-center justify-content-center btn-custom">
                            <span class="ion-ios-link"></span>
                        </a>
                        <div class="list-agent d-flex align-items-center">
                            <a href="#" class="agent-info d-flex align-items-center">
                                <div class="img-2 rounded-circle" style="background-image: url(images/person_1.jpg);"></div>
                                <h3 class="mb-0 ml-2">Ben Ford</h3>
                            </a>
                            <div class="tooltip-wrap d-flex">
                                <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Bookmark">
                                    <span class="ion-ios-heart"><i class="sr-only">Bookmark</i></span>
                                </a>
                                <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Compare">
                                    <span class="ion-ios-eye"><i class="sr-only">Compare</i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text">
                        <p class="price mb-3"><span class="old-price">800,000</span><span class="orig-price">$3,050<small>/mo</small></span></p>
                        <h3 class="mb-0"><a href="properties-single.html">Blue View Home</a></h3>
                        <span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i>2854 Meadow View Drive, Hartford, USA</span>
                        <ul class="property_list">
                            <li><span class="flaticon-bed"></span>3</li>
                            <li><span class="flaticon-bathtub"></span>2</li>
                            <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    

    <section class="ftco-section" style="margin-top: -200px;">
        <div class="container">
            <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">Find Properties</span>
            <h2 class="mb-2">Find Properties In Your City</h2>
          </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-1.jpg);">
                    <div class="location">
                        <span class="rounded">New York, USA</span>
                    </div>
                    <div class="text">
                        <h3><a href="#">100 Property Listing</a></h3>
                        <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-2.jpg);">
                    <div class="location">
                        <span class="rounded">New York, USA</span>
                    </div>
                    <div class="text">
                        <h3><a href="#">100 Property Listing</a></h3>
                        <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-3.jpg);">
                    <div class="location">
                        <span class="rounded">New York, USA</span>
                    </div>
                    <div class="text">
                        <h3><a href="#">100 Property Listing</a></h3>
                        <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-4.jpg);">
                    <div class="location">
                        <span class="rounded">New York, USA</span>
                    </div>
                    <div class="text">
                        <h3><a href="#">100 Property Listing</a></h3>
                        <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-5.jpg);">
                    <div class="location">
                        <span class="rounded">New York, USA</span>
                    </div>
                    <div class="text">
                        <h3><a href="#">100 Property Listing</a></h3>
                        <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-6.jpg);">
                    <div class="location">
                        <span class="rounded">New York, USA</span>
                    </div>
                    <div class="text">
                        <h3><a href="#">100 Property Listing</a></h3>
                        <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    
    <section class="ftco-section ftco-no-pt">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <div class="text">
                <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_1.jpg');">
                  </a>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">October 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <div class="text">
                <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_2.jpg');">
                  </a>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">October 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <div class="text">
                <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_3.jpg');">
                  </a>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">October 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <div class="text">
                <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_4.jpg');">
                  </a>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">October 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>      

    <footer class="ftco-footer ftco-section">
      <div class="container">
        
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>