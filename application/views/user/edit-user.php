
            <div id="layoutSidenav_content">
                <main>

                    <div id="container">

<h1><?=$title?></h1>

<div class="col-md-4">
<form action="" method="post"  enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Name" value="<?php if(set_value('Name')){ echo set_value('Name'); }else{ echo $user[0]['Name']; }?>" name="Name"  >

	</div>

	<div class="error"><?=form_error('Name')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Email" value="<?php if(set_value('Email')){ echo set_value('Email'); }else{ echo $user[0]['Email']; }?>"  name="Email"  >

	</div>

	<div class="error"><?=form_error('Email')?></div>

	<div class="form-group">

		<input type="password" class="form-control" placeholder="Enter password" value="<?php if(set_value('Password')){ echo set_value('Password'); }else{ echo $user[0]['Password']; }?>"  name="Password"   >

	</div>

		<div class="error"><?=form_error('password')?></div>


			<div class="form-group">

		<input type="password" class="form-control" placeholder="Enter Confirm password" value="<?php if(set_value('c_password')){ echo set_value('c_password'); }else{ echo $user[0]['Password']; }?>"  name="c_password"   >

	</div>

		<div class="error"><?=form_error('c_password')?></div>


		<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Date of Birth" value="<?php if(set_value('Date_of_Birth')){ echo set_value('Date_of_Birth'); }else{ echo $user[0]['Date_of_Birth']; }?>"  name="Date_of_Birth" >

	</div>

	<div class="error"><?=form_error('Date_of_Birth')?></div>

			<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Height" value="<?php if(set_value('Height')){ echo set_value('Height'); }else{ echo $user[0]['Height']; }?>"  name="Height" >

	</div>

	<div class="error"><?=form_error('Height')?></div>


			<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your NID" value="<?php if(set_value('NID')){ echo set_value('NID'); }else{ echo $user[0]['NID']; }?>"  name="NID" >

	</div>

	<div class="error"><?=form_error('NID')?></div>

			<div class="form-group">

		<input type="text" class="form-control" placeholder="Gender" value="<?php if(set_value('Gender')){ echo set_value('Gender'); }else{ echo $user[0]['Gender']; }?>"  name="Gender" >

	</div>

	<div class="error"><?=form_error('Gender')?></div>
			<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Status" value="<?php if(set_value('Status')){ echo set_value('Status'); }else{ echo $user[0]['Status']; }?>"  name="Status" >

	</div>

	<div class="error"><?=form_error('Status')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Type" value="<?php if(set_value('Type')){ echo set_value('Type'); }else{ echo $user[0]['Type']; }?>"  name="Type" >

	</div>

	<div class="error"><?=form_error('Type')?></div>

	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Religion" value="<?php if(set_value('Religion')){ echo set_value('Religion'); }else{ echo $user[0]['Religion']; }?>"  name="Religion" >

	</div>

	<div class="error"><?=form_error('Religion')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Place Id" value="<?php if(set_value('Place_id')){ echo set_value('Place_id'); }else{ echo $user[0]['Place_id']; }?>"  name="Place_id" >

	</div>

	<div class="error"><?=form_error('Place_id')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Contact Number" value="<?php if(set_value('Contact_Number')){ echo set_value('Contact_Number'); }else{ echo $user[0]['Contact_Number']; }?>"  name="Contact_Number" >

	</div>

	<div class="error"><?=form_error('Contact_Number')?></div>

	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Earning_Status" value="<?php if(set_value('Earning_Status')){ echo set_value('Earning_Status'); }else{ echo $user[0]['Earning_Status']; }?>"  name="Earning_Status" >

	</div>

	<div class="error"><?=form_error('Earning_Status')?></div>

	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Educational Qualification" value="<?php if(set_value('Educational_Qualification')){ echo set_value('Educational_Qualification'); }else{ echo $user[0]['Educational_Qualification']; }?>"  name="Educational_Qualification" >

	</div>

	<div class="error"><?=form_error('Educational_Qualification')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Picture" value="<?php if(set_value('Picture')){ echo set_value('Picture'); }else{ echo $user[0]['Picture']; }?>"  name="Picture" >

	</div>

	<div class="error"><?=form_error('Picture')?></div>















	 



	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Date of Birth" value="<?php if(set_value('Date_of_Birth')){ echo set_value('Date_of_Birth'); }else{ echo $user[0]['Date_of_Birth']; }?>"  name="Date_of_Birth" >

	</div>

	<div class="error"><?=form_error('Date_of_Birth')?></div>



	 
		


		<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Address" value="<?php if(set_value('Address')){ echo set_value('Address'); }else{ echo $user[0]['Address']; }?>"  name="Address"   >

	</div>

		<div class="error"><?=form_error('Address')?></div>

		<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Place Id" value="<?php if(set_value('Place_id')){ echo set_value('Place_id'); }else{ echo $user[0]['Place_id']; }?>"  name="Place_id"   >

	</div>

		<div class="error"><?=form_error('Place_id')?></div>



	<div class="form-group">

		<input type="file"  name="Picture" >

	</div>

	<div class="error"><?=form_error('Picture')?></div>



	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Edit data Now" > 
		<a href="<?=base_url()?>admin/view-user/"><button type="button" class="btn btn-success">Back To Table</button><a>
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
</div>

<style> .error{ color:red; } </style>


                
                </main>
              