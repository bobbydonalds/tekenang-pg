<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tekenang Photography</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	<link rel="icon" type="image/png" href="images/tekenang-logo.png">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i&display=swap" rel="stylesheet">
	

    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>

<!-- NAV SECTION -->
  	<nav id="navbar" class="navbar">
		  <ul class="nav-menu">
		    <li>
		      <a data-scroll="home" href="#home" class="dot active">
		        <span>Home</span>
		      </a>
		    </li>
		    <li>
		      <a data-scroll="about" href="#about" class="dot">
		        <span>About Us</span>
		      </a>
		    </li>
		    <li>
		      <a data-scroll="services" href="#services" class="dot">
		        <span>Services</span>
		      </a>
		    </li>
		    <li>
		      <a data-scroll="work" href="#work" class="dot">
		        <span>Gallery</span>
		      </a>
		    </li>
             <li>
		      <a data-scroll="testimonial" href="#testimonial" class="dot">
		        <span>Our Team</span>
		      </a>
		    </li>
		    <li>
		      <a data-scroll="contact" href="#contact" class="dot">
		        <span>Contact</span>
		      </a>
		    </li>
		  </ul>
		</nav>
		<!-- END NAV SECTION -->

		<!-- HOME SECTION -->
		<section id="home" class="hero-wrap js-fullheight" style="background-image: url(images/bg-1.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-lg-7 ftco-animate d-flex align-items-center">
          	<div class="text text-center">
          		<h1 class="logo"><img src="images/tekenang-logo.png" class="logo-tekenang"></h1>
		  				<h1 class="mb-4">We Capture <br>We Create</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
		<!-- END HOME SECTION -->

		<!-- ABOUT SECTION -->
		<section class="ftco-about img ftco-section" id="about">
    	<div class="container">
    		<div class="row d-flex no-gutters">
			@foreach ($data_about as $about)
    		@if ($about->link_video === NULL)
			<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img img-video d-flex align-self-stretch align-items-center" style="background-image:url({{ asset('storage/' . $about->gambar_1) }});">
	    					
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5">
	          <div class="heading-section ftco-animate">
	            <h2 class="mb-4">{{ $about->judul_tentang }}</h2>
	            <p>{{ $about->deskripsi_tentang }}</p>

	            <div class="counter-wrap ftco-animate d-flex my-md-4">
	              <div class="text">
	              </div>
		          </div>
		          <div class="d-flex w-100">
		            <div class="img img-about-2 mr-2" style="background-image: url({{ asset('storage/' . $about->gambar_2) }});"></div>
		            <div class="img img-about-2 ml-2" style="background-image: url({{ asset('storage/' . $about->gambar_3) }});"></div>
		          </div>
		          
	          </div>
	        </div>
				@else
					<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img img-video d-flex align-self-stretch align-items-center" style="background-image:url({{ asset('storage/' . $about->gambar_1) }});">
	    					<div class="video justify-content-center">
									<a href="{{ $about->link_video }}" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
										<span class="ion-ios-play"></span>
			  					</a>
								</div>
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5">
	          <div class="heading-section ftco-animate">
	            <h2 class="mb-4">{{ $about->judul_tentang }}</h2>
	            <p>{{ $about->deskripsi_tentang }}</p>

	            <div class="counter-wrap ftco-animate d-flex my-md-4">
	              <div class="text">
	              </div>
		          </div>
		          <div class="d-flex w-100">
		            <div class="img img-about-2 mr-2" style="background-image: url({{ asset('storage/' . $about->gambar_2) }});"></div>
		            <div class="img img-about-2 ml-2" style="background-image: url({{ asset('storage/' . $about->gambar_3) }});"></div>
		          </div>
		          
	          </div>
	        </div>
			@endif
			@endforeach
        </div>
    	</div>
    </section>
		<!-- END ABOUT SECTION -->

		<!-- SERVICES SECTION -->
		<section id="services" class="ftco-section">
		  <div class="container">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="row">
				  		<div class="col-md-5 heading-section ftco-animate pb-5">
		            <h2 class="mb-4">Our Services</h2>
		            <p></p>
		          </div>
				  	</div>
		  			<div class="row">
		        	<div class="col-md-4">
		        		<div class="media block-6 services d-block ftco-animate">
		              <div class="icon"><span class="flaticon-video-camera"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Movies &amp; Advertising Videos</h3>
		              </div>
		            </div> 
		        	</div>
		        	<div class="col-md-4">
		        		<div class="media block-6 services d-block ftco-animate">
		              <div class="icon"><span class="flaticon-video-player"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Clip &amp; Music Videos</h3>
		              </div>
		            </div> 
		        	</div>
		        	<div class="col-md-4">
		        		<div class="media block-6 services d-block ftco-animate">
		              <div class="icon"><span class="flaticon-video-player-1"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Short Film Productions</h3>
		              </div>
		            </div> 
		        	</div>
	        	</div>
	        </div>
        </div>
        
		</section>  
		<!-- END SERVICES SECTION -->

		<!-- GALLERY SECTION -->
		<section id="work" class="ftco-section">
		  <div class="container">
		  	<div class="row justify-content-center">
		  		<div class="col-md-4 heading-section text-center ftco-animate pb-5">
            <h2 class="mb-4">Previous Projects</h2>
          </div>
		  	</div>
		  </div> 
		  <div class="container-fluid px-md-0">
        <div class="row no-gutters">
			@foreach ($data_gallery as $gallery) 
          <div class="col-md-4 ftco-animate">
            <div class="model img d-flex align-items-end" style="background-image: url({{ asset('storage/' . $gallery->link_gambar) }});">
            	<a href="{{ asset('storage/' . $gallery->link_gambar) }}" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>{{ $gallery->kategori_gambar }}</span>
	              	<h2>{{ $gallery->deskripsi_gambar }}</h2>
	              </div>
              </div>
            </div>
          </div>
		  @endforeach
        </div>
      </div> 
		</section>
		<!-- END GALLERY SECTION -->

		<section class="ftco-section testimony-section" id="testimonial">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-4 heading-section text-center ftco-animate">
          	<h2 class="mb-4">Our Team</h2>
            
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
            @foreach ($data_team as $team)
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{ asset('storage/' . $team->foto_profil) }})">
                  </div>
                  <div class="text">
                    <div class="pl-5">
	                    <p class="name">{{ $team->nama_anggota }}</p>
	                    <span class="position">{{ $team->jabatan }}</span>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              
              
    
            </div>
          </div>
        </div>
			</div>
		</section>

		<!-- Start Contact Section -->
		<section class="ftco-section contact-section" id="contact">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-4 heading-section text-center ftco-animate">
            <h2 class="mb-4">Contact Us</h2>
          </div>
        </div>

        <div class="row mb-5">
            @foreach ($data_contact as $contact) 
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Based In</h3>
		            <p>{{ $contact->alamat }}</p>
		          </div>
	          </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">WhatsApp</h3>
		            <p><a href="{{ $contact->link_wa }}" target="_blank">{{ $contact->nomor_telepon }}</a></p>
	            </div>
	          </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Email Address</h3>
		            <p><a href="#">{{ $contact->alamat_email }}</a></p>
		          </div>
	          </div>
          </div>
          @endforeach
        </div>
        </div>
      </div>
    </section>
		<!-- End Contact Section -->


		<!-- Start Footer Section -->
		<footer class="ftco-footer py-5">
		  <div class="container text-center">
		    <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 Tekenang Photography | Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

					  <ul class="ftco-footer-social p-0">
            @foreach ($data_sosmed as $sosmed)           
              <li class="ftco-animate"><a href="{{ $sosmed->link_sosmed }}"><span class="icon-{{ $sosmed->tipe_sosmed }}"></span></a></li>
           @endforeach </ul>
          </div>
        </div>
		  </div>
		</footer>
		<!-- End Footer Section -->
   

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>