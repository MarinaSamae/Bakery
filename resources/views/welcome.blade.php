<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Bakery Point</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
        <link rel="stylesheet" href="vendors/scroll/jquery.mCustomScrollbar.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
  
    </head>
    <body>
        
    <div class="canvus_menu">
        	<div class="container">
        		<div class="float-left">
        			<div class="toggle_icon">
        				<span></span>
        			</div>
        		</div>
        		<div class="float-right">



            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="genric-btn default circle arrow"  href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="genric-btn default circle arrow"  href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        		</div>
        	</div>
        </div>
        </div>
           

               <!--================Home Banner Area =================-->
          <section class="home_slider">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><img src="img/slider/slider-1.jpg" alt="">
						<div class="slider_text">
							<img src="img/slider/slider-content.png" alt="">
						</div>
					</div>
					<div class="swiper-slide"><img src="img/slider/slider-2.jpg" alt="">
						<div class="slider_text">
							<img src="img/slider/slider-content.png" alt="">
						</div>
					</div>
					<div class="swiper-slide"><img src="img/slider/slider-3.jpg" alt="">
						<div class="slider_text">
							<img src="img/slider/slider-content.png" alt="">
						</div>
					</div>
				</div>
			</div>

        </section>
        <!--================End Home Banner Area =================-->
        

 <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/swiper/js/swiper.min.js"></script>
        <script src="vendors/scroll/jquery.mCustomScrollbar.js"></script>
        <script src="js/theme.js"></script>

    </body>
</html>