
            <div id="layoutSidenav_content">
                <main>

                    <div id="container">

<h1><?=$title?></h1>

<div class="col-md-4">
<form action="" method="post"  enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		<input type="text" class="form-control" place_nameholder="Enter Your Sender ID" value="<?php if(set_value('Sender_id')){ echo set_value('Sender_id'); }else{ echo $request[0]['Sender_id']; }?>" name="Sender_id"  >

	</div>

	<div class="error"><?=form_error('Sender_id')?></div>

		<div class="form-group">

		<input type="text" class="form-control" place_nameholder="Enter Your Date" value="<?php if(set_value('Receiver_id')){ echo set_value('Receiver_id'); }else{ echo $request[0]['Receiver_id']; }?>" name="date"  >

	</div>

	<div class="error"><?=form_error('Receiver_id')?></div>

	<div class="form-group">

		<input type="text" class="form-control" place_nameholder="Enter Your Accept" value="<?php if(set_value('Accept')){ echo set_value('Accept'); }else{ echo $request[0]['Accept']; }?>" name="Accept"  >

	</div>
	<div class="error"><?=form_error('Accept')?></div>





	<div class="form-group">

		<input type="submit"  blood_group="submit" class="btn btn-success" value="Edit data Now" > 
		<a href="<?=base_url()?>admin/view-bdh/"><button type="button" class="btn btn-success">Back To Table</button><a>
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
</div>

<style> .error{ color:red; } </style>


</main>
              