<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mahadi's Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('frontend/css/animate.cs')}}s">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{asset('frontend/fonts/flaticon/font/flaticon.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('frontend/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<div class="text-center">
					@foreach ($profile as $profile)
				<div class="author-img" >

							<img src="{{asset('uploads/profile/'.$profile->image)}}" alt="image" style="width:150px;height:150px;border-radius:50%;">


				</div>
				<h1 id="colorlib-logo"><a href="#"  style="color:yellow;">{{ $profile->name }}</a></h1>

				<span class="position" style="margin-bottom:0px;font-weight:bold;"><a href="#">{{ $profile->position }}</a></span>
				<span style="color:#c3c30d;">at</span>
				<span class="position" style="margin-bottom:2em;font-weight:bold;"><a href="#">{{ $profile->company }}</a></span>
					@endforeach
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div id="navbar" class="collapse">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">Home</a></li>
						<li><a href="#" data-nav-section="about">About</a></li>
						<li><a href="#" data-nav-section="experience">Experience</a></li>
						<li><a href="#" data-nav-section="skills">Skills</a></li>
						<li><a href="#" data-nav-section="education">Education</a></li>
						<li><a href="#" data-nav-section="work">Work</a></li>
						<li><a href="#" data-nav-section="services">Services</a></li>



						<li><a href="#" data-nav-section="contact">Contact</a></li>
					</ul>
				</div>
			</nav>

			<div class="colorlib-footer">
				<p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <span style="color:white;"> All rights reserved | This Portfolio made by</span><i class="icon-heart" aria-hidden="true"></i><a href="#" target="_blank">Mahadi</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				<ul>
					<li><a style="color:white;" href="#"><i class="icon-facebook2"></i></a></li>
					<li><a style="color:white;" href="#"><i class="icon-twitter2"></i></a></li>
					<li><a style="color:white;" href="#"><i class="icon-instagram"></i></a></li>
					<li><a style="color:white;" href="#"><i class="icon-linkedin2"></i></a></li>
				</ul>
			</div>

		</aside>

		<div id="colorlib-main">
			<section id="colorlib-hero" class="js-fullheight" data-section="home">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(frontend/images/img_bg_5.jpeg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner js-fullheight">
					   					<div class="desc">
						   					<h1 style="color:white;"> <span style="font-size:35px">Hi!</span> <br> <span style="font-size:40px">this is</span> Mahmud</h1>
						   					{{-- <h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2>
												<p><a class="btn btn-primary btn-learn">Download CV <i class="icon-download4"></i></a></p> --}}
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(frontend/images/img_bg_6.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>I am <br>a Designer</h1>

											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</section>

			<section class="colorlib-about" data-section="about" >
				<div class="colorlib-narrow-content">
					<div class="row" style="padding-top:0em;">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc">
										<span class="heading-meta">About Us</span>
										@foreach ($about as $about)


										<h2 class="colorlib-heading">{{ $about->title }}</h2>
										<p><strong>Hi I'm {{ $about->name }}</strong>{{ $about->body }}</p>

										@endforeach
									</div>
								</div>
							</div>
							<div class="row">
								@foreach ($skill as $skill)


								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-1">
										<span class="icon2"><i class="{{ $skill->icon }}"></i></span>
										<h3>{{ $skill->name }}</h3>
									</div>
								</div>
               	@endforeach

							</div>
							{{-- <div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<div class="hire">
										<h2>I am happy to know you <br>that 300+ projects done sucessfully!</h2>
										<a href="#" class="btn-hire">Hire me</a>
									</div>
								</div>
							</div> --}}
						</div>
					</div>
				</div>
			</section>

			<section class="colorlib-experience" data-section="experience">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Experience</span>
							<h2 class="colorlib-heading animate-box">Work Experience</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
								 <div class="timeline-centered">

									 @foreach ($experience as $experience)
									 <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
											<div class="timeline-entry-inner">
												 <div class="timeline-icon color-1">
														<i class="icon-pen2"></i>
												 </div>
												 <div class="timeline-label">
														<h2><a href="#">{{ $experience->title }}</a> <span>{{ $experience->duration }}</span></h2>
														<p>{{ $experience->body }}</p>
												 </div>
											</div>
									 </article>
									 @endforeach


									 <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
											<div class="timeline-entry-inner">
												 <div class="timeline-icon color-none">
												 </div>
											</div>
									 </article>
								</div>
						 </div>
					 </div>
				</div>
			</section>

			<section class="colorlib-skills" data-section="skills">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">My Specialty</span>
							<h2 class="colorlib-heading animate-box">My Skills</h2>
						</div>
					</div>
					<div class="row">

						@foreach ($myskill as $myskill)


						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3 style="font-weight:bold;" >{{ $myskill->name }}</h3>
								<div class="progress">
								 	<div class="progress-bar {{ $myskill->color }}" role="progressbar" aria-valuenow="75"
								  	aria-valuemin="0" aria-valuemax="100" style="width:{{ $myskill->level }}">
								    <span>{{ $myskill->level }}</span>
								  	</div>
								</div>
							</div>
						</div>
							@endforeach
					</div>
				</div>
			</section>


			<section class="colorlib-education" data-section="education">
							<div class="colorlib-narrow-content">
								<div class="row">
									<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
										<span class="heading-meta">Education</span>
										<h2 class="colorlib-heading animate-box">Education</h2>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
										<div class="fancy-collapse-panel">
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												@foreach ($education as $education)


												<div class="panel panel-default">
												    <div class="panel-heading" role="tab" id="headingOne">
												        <h4 class="panel-title" style="color:blue;font-weight:bold;">
												            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{ $education->title }}
												            </a>
												        </h4>
												    </div>
												    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
												         <div class="panel-body">
												            <div class="row">
													      		<div class="col-md-12">
																			<p style="color:black;font-size:15px;">{!! $education->body !!}</p>

													      		</div>

													      	</div>
												         </div>
												    </div>
												</div>

												<div class="panel panel-default">
												    <div class="panel-heading" role="tab" id="headingTwo">
												        <h4 class="panel-title">
												            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">{{ $education->stitle }}
												            </a>
												        </h4>
												    </div>
												    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
												        <div class="panel-body">
												            <p>{!! $education->sbody !!}</p>

												        </div>
												    </div>
												</div>
												<div class="panel panel-default">
												    <div class="panel-heading" role="tab" id="headingThree">
												        <h4 class="panel-title">
												            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">{{ $education->htitle }}
												            </a>
												        </h4>
												    </div>
												    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
												        <div class="panel-body">
												            <p>{!! $education->hbody !!}</p>
												        </div>
												    </div>
												</div>
			            			@endforeach

											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

			<section class="colorlib-work" data-section="work">
			 				<div class="colorlib-narrow-content">
			 					<div class="row">
			 						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
			 							<span class="heading-meta">My Work</span>
			 							<h2 class="colorlib-heading animate-box">MY Goal</h2>
			 						</div>
			 					</div>
			 					<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
			 						{{-- <div class="col-md-12">
			 							<p class="work-menu"><span><a href="#" class="active">Graphic Design</a></span> <span><a href="#">Web Design</a></span> <span><a href="#">Software</a></span> <span><a href="#">Apps</a></span></p>
			 						</div> --}}
			 					</div>
			 					<div class="row">
			 						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
			 							<div class="project" style="background-image: url(frontend/images/img-1.jpg);">
			 								<div class="desc">
			 									<div class="con">
			 										<h3><a href="work.html">Work 01</a></h3>
			 										<span>Website</span>
			 										<p class="icon">
			 											<span><a href="#"><i class="icon-share3"></i></a></span>
			 											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
			 											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
			 										</p>
			 									</div>
			 								</div>
			 							</div>
			 						</div>
			 						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
			 							<div class="project" style="background-image: url(frontend/images/img-2.jpg);">
			 								<div class="desc">
			 									<div class="con">
			 										<h3><a href="work.html">Work 02</a></h3>
			 										<span>Animation</span>
			 										<p class="icon">
			 											<span><a href="#"><i class="icon-share3"></i></a></span>
			 											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
			 											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
			 										</p>
			 									</div>
			 								</div>
			 							</div>
			 						</div>




			 					</div>

			 				</div>
			 			</section>

			<section class="colorlib-services" data-section="services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">What I do?</span>
							<h2 class="colorlib-heading">Here are some of my expertise</h2>
						</div>
					</div>
					<div class="row row-pt-md">
						<div class="col-md-4 text-center animate-box">
							@foreach ($expertise as $expertise)


							<div class="services color-1">
								<span class="icon">
									<i class="{{ $expertise->icon }}"></i>
								</span>
								<div class="desc">
									<h3>{{ $expertise->name }}</h3>
									<p>{{str_limit($expertise->body,'100') }}</p>
								</div>
							</div>
						</div>
						@endforeach

					</div>
				</div>
			</section>
			<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Get in Touch</span>
							<h2 class="colorlib-heading">Contact</h2>
						</div>
					</div>
					<div class="row">
						@foreach ($myself as $myself)



						<div id="social" class="col-md-5">

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="tel://" style="color:#337ab7;">{{ $myself->phone }}</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-social-facebook"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="{{ $myself->facebook }}" style="color:#337ab7;"  target="_blank">Facebook</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-social-linkedin"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="{{ $myself->linkedin }} target="_blank"
										" style="color:#337ab7;">Linkedin</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-globe-outline"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="#" style="color:#337ab7;">{{ $myself->email }}</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-map"></i>
								</div>
								<div class="colorlib-text">
									<p style="color:#337ab7;">{{ $myself->address }}</p>
								</div>
							</div>



						</div>
						@endforeach
						<div class="col-md-7 col-md-push-1">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
									<form action="">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Name">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Email">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Subject">
										</div>
										<div class="form-group">
											<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>

		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->

	<!-- jQuery -->
	<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('frontend/js/jquery.flexslider-min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
	<!-- Counters -->
	<script src="{{asset('frontend/js/jquery.countTo.js')}}"></script>


	<!-- MAIN JS -->
	<script src="{{asset('frontend/js/main.js')}}"></script>

	</body>
</html>
