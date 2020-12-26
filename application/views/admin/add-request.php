
            <div id="layoutSidenav_content">
                <main>
                	<div id="container">

<h1><?=$title?></h1>

<div class="col-md-4">
<form action="" method="post" enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Sender Id" value="<?=set_value('Sender_id')?>" name="Sender_id"  >

	</div>

	<div class="error"><?=form_error('Sender_id')?></div>

	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Receiver Id" value="<?=set_value('Receiver_id')?>" name="Receiver_id"  >
		
	</div>

	<div class="error"><?=form_error('Receiver_id')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Accept " value="<?=set_value('Accept ')?>" name="Accept "  >
		
	</div>

	<div class="error"><?=form_error('Accept')?></div>


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