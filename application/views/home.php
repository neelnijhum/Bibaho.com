


<!-- banner -->
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 banner-text-w3ls">
					<!-- banner slider-->
					<div class="csslider infinity" id="slider1">
						<input type="radio" name="slides" checked="checked" id="slides_1" />
						<input type="radio" name="slides" id="slides_2" />
						<input type="radio" name="slides" id="slides_3" />
						<ul class="banner_slide_bg">
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4">BIBAHO.COM</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Bengali Matrimonial Site</h4>
										<p class="w3ls_pvt-title my-3">Are you looking for your SOULMATE??We are giving you so many choices.Find your perfect soulmate.</p>
										<a href="#about" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4">Bengali Matrimonial Search.</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Best Matching Couples</h4>
										<p class="w3ls_pvt-title my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
								 Vestibulum ante. Morbi at dui nisl.</p>
										<a href="#about" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4">Bengali Matrimonial Search.</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Best Matching Couples</h4>
										<p class="w3ls_pvt-title my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
								 Vestibulum ante. Morbi at dui nisl.</p>
										<a href="#about" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li>
						</ul>
						<div class="navigation">
							<div>
								<label for="slides_1"></label>
								<label for="slides_2"></label>
								<label for="slides_3"></label>
							</div>
						</div>
					</div>
					<!-- //banner slider-->
				</div>
				<div class="col-lg-5 col-md-8 px-lg-3 px-0">
					<div class="banner-form-w3 ml-lg-5">
						<div class="padding">
							<form action="" method="post" enctype="multipart/form-data" >

								<h5 class="mb-3">Register & Join our Matrimony</h5>
								<div class="form-style-w3layout">
									

	<?=$this->session->flashdata('message');?>
	
 
	
	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Name" value="<?=set_value('Name')?>" name="Name"  >

	</div>

	<div class="error"><?=form_error('Name')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Email" value="<?=set_value('Email')?>"  name="Email"  >

	</div>

	<div class="error"><?=form_error('Email')?></div>
 

			<div class="form-group">

		<input type="password" class="form-control" placeholder="Enter Password" value="<?=set_value('Password')?>"  name="Password"   >

	</div>

		<div class="error"><?=form_error('Password')?></div>


	<div class="error"><?=form_error('Password')?></div>


			<div class="form-group">

		<input type="password" class="form-control" placeholder="Enter Confirm Password" value="<?=set_value('c_password')?>"  name="c_password"   >

	</div>

	 
	


	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Signup Now" > 
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>
								</div>
						 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- what we Serve -->
<section class="banner-bottom py-5" id="about">
	<div class="container py-lg-5">
		<h2 class="heading mb-sm-5 mb-4"> Recently Married Happy Couples</h2>
		<div class="row bottom-grids">
			<div class="col-lg-3 col-sm-6">
				<div class="three-grids-w3pvt-1 d-flex text-right">
					<div class="text-effect-wthree midd-text-w3ls p-3 w-100">
						<h5 class="text-uppercase text-bl font-weight-bold">Happy Smile</h5>
						<p>Matrimony</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="three-grids-w3pvt-2 d-flex text-right mt-sm-0 mt-4">
					<div class="text-effect-wthree midd-text-w3ls p-3 w-100">
						<h5 class="text-uppercase text-bl font-weight-bold">Couple</h5>
						<p>Matrimony</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
				<div class="three-grids-w3pvt-3 d-flex text-right">
					<div class="text-effect-wthree midd-text-w3ls p-3 w-100">
						<h5 class="text-uppercase text-bl font-weight-bold">Engaged</h5>
						<p>Matrimony</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
				<div class="three-grids-w3pvt-4 d-flex text-right">
					<div class="text-effect-wthree midd-text-w3ls p-3 w-100">
						<h5 class="text-uppercase text-bl font-weight-bold">Bride</h5>
						<p>Matrimony</p>
					</div>
				</div>
			</div>

			<div class="col-lg-5">
				<p class="mt-4">       </p>
			</div>
			<div class="col-lg-1 col-sm-3 col-5 ser-img">
				<span class="fa fa-image mt-4"></span>
				<span class="fa fa-handshake-o mt-4"></span>
			</div>
			<div class="col-lg-1 col-sm-3 col-5 ser-img">
				<span class="fa fa-hourglass mt-4"></span>
				<span class="fa fa-paw mt-4"></span>
			</div>
			<div class="col-lg-5">
				<p class="mt-4">  </p>
			</div>
		</div>
	</div>
</section>
<!-- //what we Serve -->

<!-- services -->
<section class="services py-5" id="services">
	<div class="container">
		<h3 class="heading mb-5">Our Services</h3>
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<span class="fa fa-handshake-o"></span>
						</div>
						<div class="our-services-text">
							<h4>Wedding Ceremony</h4>
							<p>We arranges any type of weeding ceremony</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<span class="fa fa-image"></span>
						</div>
						<div class="our-services-text">
							<h4>Bridal Cottage</h4>
							<p>We arranges Bridal Cottage</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<span class="fa fa-gavel"></span>
						</div>
						<div class="our-services-text">
							<h4>Catering Services</h4>
							<p>We provides catering services</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<span class="fa fa-info-circle"></span>
						</div>
						<div class="our-services-text">
							<h4>Wedding Decors</h4>
							<p>We provides Wedding Decors</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<span class="fa fa-hourglass"></span>
						</div>
						<div class="our-services-text">
							<h4>Florist Services </h4>
							<p>We provides Florist Services</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<span class="fa fa-paw"></span>
						</div>
						<div class="our-services-text">
							<h4>Matrimony Services</h4>
							<p>We provides Matrimony Services</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //services -->

<!-- stats section -->
<section class="stats-section-w3pvt" id="stats">
	<div class="py-5">
		<div class="container py-lg-5">
		<h3 class="heading mb-sm-5 mb-4">Our statistics</h3>
			<div class="row text-center">
				<div class="col-lg-3 col-6">
					<div class="w3layouts_stats_left w3_counter_grid">
						<div class="stats-icon">
							<span class="fa fa-credit-card"></span>
						</div>
						<p class="counter text-black">1568</p>
						<p class="para-text-w3ls">Happy Couples</p>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="w3layouts_stats_left w3_counter_grid2">	
						<div class="stats-icon">
							<span class="fa fa-users"></span>
						</div>
						<p class="counter">1900</p>
						<p class="para-text-w3ls">Married Couples</p>
					</div>
				</div>
				<div class="col-lg-3 col-6 mt-lg-0 mt-4">
					<div class="w3layouts_stats_left w3_counter_grid1">	
						<div class="stats-icon">
							<span class="fa fa-dollar"></span>
						</div>
						<p class="counter">1422</p>
						<p class="para-text-w3ls">Registered</p>
					</div>
				</div>
				<div class="col-lg-3 col-6 mt-lg-0 mt-4">
					<div class="w3layouts_stats_left w3_counter_grid1">	
						<div class="stats-icon">
							<span class="fa fa-users"></span>
						</div>
						<p class="counter">400</p>
						<p class="para-text-w3ls">Media Followers</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //stats section -->

<!-- other services -->
<section class="other_services py-5" id="why">
	<div class="container py-lg-5 py-3">
		<h3 class="heading mb-sm-5 mb-4">Why Choose Us </h3>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="grid">
					<img src="<?=base_url()?>assets/images/b3.jpg" alt="" class="img-fluid" />
					<div class="info p-4">
						<h4 class=""> Creative Plans</h4>
						<p class="mt-3">Onec consequat sapien amet leo cur sus rhoncus. Nullam dui mi Donec at nunc enim. Proin at iaculis tellus...</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-md-0 mt-4">
				<div class="grid">
					<img src="<?=base_url()?>assets/images/b4.jpg" alt="" class="img-fluid" />
					<div class="info p-4">
						<h4 class=""> Best Celebrations</h4>
						<p class="mt-3">Onec consequat sapien amet leo cur sus rhoncus. Nullam dui mi Donec at nunc enim. Proin at iaculis tellus...</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
				<div class="grid">
					<img src="<?=base_url()?>assets/images/b5.jpg" alt="" class="img-fluid" />
					<div class="info p-4">
						<h4 class=""> Awesome Services </h4>
						<p class="mt-3">Onec consequat sapien amet leo cur sus rhoncus. Nullam dui mi Donec at nunc enim. Proin at iaculis tellus...</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //other services -->

<!-- testimonials -->
<section class="testimonials" id="testi">
	<div class="layer py-lg-5">
		<div class="container py-5">
			<h3 class="heading mb-sm-5 mb-4">what our customers say</h3>
			<div class="text-center">
				<div class="row">
					<div class="col-md-6">
						<div class="testi-w3pvt-grid">
							<p>
								<span class="fa fa-quote-left"></span> Vivamus magna justo, lacinia eget consectetur
								sed,
								convallis at tellus. Nulla
								quis lorem ut libero malesuada feugiat.Nulla quis lorem ut libero malesuada
								feugiat.
								Donec rutrum.
								<span class="fa ml-2 fa-quote-right"></span>
							</p>
						</div>
						<div class="testi-pos">
							<img src="<?=base_url()?>assets/images/ts1.jpg" alt="" class="img-fluid rounded-circle mb-3" />
							<h4> John & Elisa </h4>
						</div>
					</div>
					<div class="col-md-6 mt-md-0 mt-3">
						<div class="testi-w3pvt-grid">
							<p>
								<span class="fa fa-quote-left"></span> Vivamus magna justo, lacinia eget consectetur
								sed,
								convallis at tellus. Nulla
								quis lorem ut libero malesuada feugiat.Nulla quis lorem ut libero malesuada
								feugiat.
								Donec rutrum.
								<span class="fa ml-2 fa-quote-right"></span>
							</p>
						</div>
						<div class="testi-pos">
							<img src="<?=base_url()?>assets/images/ts2.jpg" alt="" class="img-fluid rounded-circle mb-3" />
							<h4>Watson & Mary</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //testimonials -->

	
<!-- Team  -->
<section class="team pt-5" id="couples">
    <div class="container py-lg-5">
		<h3 class="heading mb-sm-5 mb-4">Happy Couples</h3>
        <div class="row">
			<div class="team-grid col-md-3 mb-5">
				<img src="<?=base_url()?>assets/images/couple1.jpg" class="" alt="" />
				<div class="team-info text-center">
					<h3 class="e">Tyson & Amery</h3>
					<span class="">Love Couple</span>
				</div>
			</div>
			<div class="team-grid col-md-3 mb-5">
				<img src="<?=base_url()?>assets/images/couple2.jpg" class="" alt="" />
				<div class="team-info text-center">
					<h3 class="">Stas & Melnikov</h3>
					<span class="">Love Couple</span>
				</div>
			</div>
			<div class="team-grid col-md-3 mb-5">
				<img src="<?=base_url()?>assets/images/couple3.jpg" class="" alt="" />
				<div class="team-info text-center">
					<h3 class="">Lise & Laurie</h3>
					<span class="">Love Couple</span>
				</div>
			</div>
			<div class="team-grid col-md-3 mb-5">
				<img src="<?=base_url()?>assets/images/couple4.jpg" class="" alt="" />
				<div class="team-info text-center">
					<h3 class="">Effie & Eleanora</h3>
					<span class="">Love Couple</span>
				</div>
			</div>
        </div>
    </div>
</section>
<!-- //Team -->
	
<!-- subscribe -->
<section class="subscribe" id="subscribe">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5 d-flex subscribe-left p-lg-5 py-sm-5 py-4">
				<div class="news-icon mr-3">
					<span class="fa fa-paper-plane" aria-hidden="true"></span>
				</div>
				<div class="text">
					<h3>Subscribe To Our Newsletter</h3>
				</div>
			</div>
			<div class="col-md-7 subscribe-right p-lg-5 py-sm-5 py-4">
				<form action="#" method="post">
					<input type="email" name="email" placeholder="Enter your email here" required="">
					<button class="btn1"><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
				</form>
				<p>we never share your email with anyone else</p>
			</div>
		</div>
	</div>
</section>
<!-- //subscribe -->

