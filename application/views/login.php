


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
										<h3 class="b-w3ltxt text-capitalize mt-md-4">Matrimonial Search.</h3>
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
										<h3 class="b-w3ltxt text-capitalize mt-md-4">Matrimonial Search.</h3>
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

								<h5 class="mb-3">Login</h5>
								<div class="form-style-w3layout">
									

	<?=$this->session->flashdata('message');?>
	
 
	 
	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Email" value="<?=set_value('Email')?>"  name="Email"  >

	</div>

	<div class="error"><?=form_error('Email')?></div>
 

			<div class="form-group">

		<input type="password" class="form-control" placeholder="Enter Password" value="<?=set_value('Password')?>"  name="Password"   >

	</div>

		<div class="error"><?=form_error('Password')?></div>
 
	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Login Now" > 
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



