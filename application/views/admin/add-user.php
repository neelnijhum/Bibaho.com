
            <div id="layoutSidenav_content">
                <main>
                	<div id="container">

<h1><?=$title?></h1>

<div class="col-md-4">
<form action="" method="post" enctype="multipart/form-data" >


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

		<div class="error"><?=form_error('c_password')?></div>


			<div class="form-group">

		<input type="text" class="form-control" placeholder="Address" value="<?=set_value('Address')?>"  name="Address"   >

	</div>

		<div class="error"><?=form_error('Address')?></div>


			<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Date of Birth" value="<?=set_value('Date_of_Birth')?>"  name="Date_of_Birth"   >

	</div>

		<div class="error"><?=form_error('Date_of_Birth')?></div>





	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Height" value="<?=set_value('Height')?>"  name="Height" >

	</div>

	<div class="error"><?=form_error('Height')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your NID" value="<?=set_value('NID')?>"  name="NID" >

	</div>

	<div class="error"><?=form_error('NID')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Gender" value="<?=set_value('Gender')?>" name="Gender"  >

	</div>

	<div class="error"><?=form_error('Gender')?>
		
	</div>

	<div class="form-group">

		<input type="text" class="form-control" placeholder="Status" value="<?=set_value('Status')?>" name="Status"  >

	</div>

	<div class="error"><?=form_error('Status')?>
		
	</div>

	<div class="form-group">

		<input type="text" class="form-control" placeholder="Type" value="<?=set_value('Type')?>" name="Type"  >

	</div>

	<div class="error"><?=form_error('Type')?>
		
	</div>

	<div class="form-group">

		<input type="text" class="form-control" placeholder="Religion" value="<?=set_value('Religion')?>" name="Religion"  >

	</div>

	<div class="error"><?=form_error('Religion')?>
		
	</div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Place Id" value="<?=set_value('Place_id')?>"  name="Place_id"   >

	</div>

		<div class="error"><?=form_error('Place_id')?>
			
		</div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Contact Number" value="<?=set_value('Contact_Number')?>" name="Contact Number"  >

	</div>

	<div class="error"><?=form_error('Contact Number')?>
		
	</div>

	<div class="form-group">

		<input type="text" class="form-control" placeholder="Earning Status" value="<?=set_value('Earning_Status')?>" name="Earning Status"  >

	</div>

	<div class="error"><?=form_error('Earning Status')?>
		
	</div>

	<div class="form-group">

		<input type="text" class="form-control" placeholder="Educational Qualification" value="<?=set_value('Educational_Qualification')?>" name="Educational_Qualification"  >

	</div>

	<div class="error"><?=form_error('Educational Qualification')?>
		
	</div>	



	<div class="form-group">

		<input type="file"  name="Picture" >

	</div>

	<div class="error"><?=form_error('Picture')?></div>




	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Add data Now" > 
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
</div>

<style> .error{ color:red; } </style>

                    


                
                </main>
              