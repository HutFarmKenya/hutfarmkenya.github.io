<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HutFarm</title>

    
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{url('css/nivo-lightbox/nivo-lightbox.css')}}">
    <link rel="stylesheet" href="{{url('css/nivo-lightbox/nivo-lightbox-theme.css')}}">
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
     <!--        icon library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="{{url('js/modernizr.custom.js')}}"></script>

    <style type="text/css">
        .fa {
                        padding:10px;
                                    width: 30px;


        }
    </style>

</head>

<body>

    <a href="#header" id="back-to-top" class="top"><i class="fa fa-chevron-up"></i></a>
    <section id="header" class="header">
        <div class="top-bar">
            <div class="container">
                <div class="navigation" id="navigation-scroll">
                        <div class="row">
                            <div class="col-md-11 col-xs-10">
                                <a href="index.html"><span id="logo"><strong class="strong">H</strong>utFarm</span></a>
                            </div>
                            <div class="col-md-1 col-xs-2">
                                <p class="nav-button">
                                    <button id="trigger-overlay" type="button">
                                    <i class="fa fa-bars"></i>
                                    </button>
                                </p>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.navigation -->
                </div><!--/.container-->
            </div><!--/.top-bar-->

        <div class="container">
            <div class="starting">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/leadlogo.png') }}" style="width: 300px; height: 300px;" alt="hutfarm" class="wow flipInY animated animated">
                    </div>
                    <div class="col-md-8">
                        <div class="banner-text">
                             <h2 class="animation-box wow bounceIn animated"><strong class="strong">For all your</strong>
                            housing needs</h2>
                            <p style="text-align: center;">
                                 "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                            </p>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <a class="btn btn-primary btn-lg" type="btn" href="#">View Properties</a>
                                    </div>
                                    <div class="col-3">
    <a class="btn btn-warning btn-lg" type="btn" href="{{route('home')}}">Upload To HutFarm</a>                                    </div>
                                </div>
                                
                            </div>
                        </div> <!-- /.banner-text -->
                    </div>
                </div>
            </div>
            <!-- /.starting -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#header -->

    <!-- HHHHHHHHHHHHHHHHHH        Bigfeature         HHHHHHHHHHHHHHHH -->
    <section id="bigfeatures" class="img-block-3col wrapper">
        <!--    <p style="text-align: center; color: #000; margin-top: -50px;" class="page-header">What's on HutFarm</p> -->

        <div class="container">

            <div class="row">
                <div class="col-sm-4">
                    <ul class="item-list-right item-list-big">
                        <li class="wow fadeInLeft animated"> <i class="fa fa-star"></i> 
                            <h3><strong>Browse Our Property Collection</strong></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        </li>
                        <li class="wow fadeInLeft animated"> <i class="fa fa-star"></i> 
                            <h3><strong>Browse Our Property Collection</strong></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        </li>
                        <li class="wow fadeInLeft animated"> <i class="fa fa-star"></i> 
                            <h3><strong>Browse Our Property Collection</strong></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 col-sm-push-4">
                    <ul class="item-list-left item-list-big">
                        <li class="wow fadeInRight animated"> <i class="fa fa-star"></i>
                            <h3><strong>Browse Our Property Collection</strong></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        </li>
                        <li class="wow fadeInRight animated"> <i class="fa fa-star"></i>
                            <h3><strong>Browse Our Property Collection</strong></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        </li>
                        <li class="wow fadeInRight animated"> <i class="fa fa-star"></i>
                            <h3><strong>Browse Our Property Collection</strong></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 col-sm-pull-4 text-center">
                    <div class="animation-box wow bounceIn animated">
                        <img class="highlight-left wow animated" src="{{asset('img/spark.png')}}" height="192" width="48" alt=""> 
                        <img class="highlight-right wow animated" src="{{asset('img/spark.png')}}" height="192" width="48" alt="">
                        <img class="screen" src="{{asset('img/leadlogo.png')}}" alt="" height="581" width="300">
                    </div>
                </div>
            </div>
        </div> <!-- /.container -->
    </section> <!-- /#bigfeatures -->

   

   


    <!-- HHHHHHHHHHHHHHHHHH      Screenshots    HHHHHHHHHHHHHHHH -->

    <section id="gallery" class="wrapper">
        <div class="container">
            <div class="virticle-line"></div>
            <div class="circle"></div>
            <h4 style="text-align: center;">Property Gallery</h4>
            <div class="row">
                <div class="col-xs-12">
                    <div id="screenshots" class="owl-carousel owl-theme">
                      <a href="img/1.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="img/1.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="img/2.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="img/2.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="img/3.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="img/3.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="img/4.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="img/4.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="img/1.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="img/1.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="img/2.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="img/2.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="img/3.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="img/3.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="img/4.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="img/4.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="img/1.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="img/1.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="img/2.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="img/2.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                    </div>
             <!--         <div class="customNavigation row">
                      <a class="btn prev gallery-nav wow animated bounceInLeft"><i class="fa fa-arrow-left"></i></a> 
                      <a class="btn next gallery-nav wow animated bounceInRight"><i class="fa fa-arrow-right"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>



    <!-- HHHHHHHHHHHHHHHHHH        Footer          HHHHHHHHHHHHHHHH -->

    <section id="footer" class="wrapper">
        <div class="container text-center">
            <div class="footer-logo">
                <h1 class="text-center animation-box wow bounceIn animated">HutFarm</h1>
            </div>
            <ul class="social-icons text-center">
                <li class="wow animated fadeInLeft facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="wow animated fadeInRight twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                <li class="wow animated fadeInLeft linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li class="wow animated fadeInRight googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li class="wow animated fadeInLeft github"><a href="#"><i class="fa fa-envelope"></i></a>
            </ul>

            <div class="copyright">
                <div class="credits">
                    Made With <i class="fa fa-heart"></i> by <a href="http://josephbill.github.io" target="_blank">Joseph Mbugua</a>
                </div>
                <div>©2020 HutFarm, All Rights Reserved</div>
            </div>
        </div><!-- container -->
    </section>



    
    


    <!-- HHHHHHHHHHHHHHHHHH        Open/Close          HHHHHHHHHHHHHHHH -->
    <div class="overlay overlay-hugeinc">
        <button type="button" class="overlay-close">Close</button>
        <nav>
        <ul>
            <li class="hideit"><a href="#header">Home</a></li>
            <li class="hideit"><a href="#">View Properties</a></li>
            <li class="hideit"><a href="#">Register</a></li>
            <li class="hideit"><a href="#contact">Contact Us</a></li>
        </ul>
        </nav>
    </div>
    <script src="{{url('js/jquery-1.11.2.min.js')}}"></script>
    <script src="{{url('js/wow.min.js')}}"></script>
    <script src="{{url('js/owl-carousel.js')}}"></script>
    <script src="{{url('js/nivo-lightbox.min.js')}}"></script>
    <script src="{{url('js/smoothscroll.js')}}"></script>
    <!--<script src="js/jquery.ajaxchimp.min.js"></script>-->
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/classie.js')}}"></script>
    <script src="{{url('js/script.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        $(document).ready(function(){
            $(".hideit").click(function(){
                $(".overlay").hide();
            });
            $("#trigger-overlay").click(function(){
                $(".overlay").show();
            });
        });
    </script>
    <script>
        $(document).ready(function(){

          var kawa = $('.top-bar');
          var back = $('#back-to-top');
          function scroll() {
             if ($(window).scrollTop() > 700) {
                kawa.addClass('fixed');
                back.addClass('show-top');

             } else {
                kawa.removeClass('fixed');
                back.removeClass('show-top');
             }
          }

          document.onscroll = scroll;
        });
    </script>
    <!--HHHHHHHHHHHH        Smooth Scrooling     HHHHHHHHHHHHHHHH-->
    <script>
        $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });
    </script>
</body>
</html>