Place_name
            <div id="layoutSidenav_content">
                <main>

                    <div id="container">

<h1><?=$title?></h1>

<div class="col-md-4">
<form action="" method="post"  enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		<input type="text" class="form-control" place_nameholder="Enter Place_name" value="<?php if(set_value('Place_name')){ echo set_value('Place_name'); }else{ echo $place[0]['Place_name']; }?>" name="Place_name"  >

	</div>

	<div class="error"><?=form_error('Place_name')?></div>






	<div class="form-group">

		<input type="submit"  Place_name="submit" class="btn btn-success" value="Edit data Now" > 
		<a href="<?=base_url()?>admin/view-place/"><button type="button" class="btn btn-success">Back To Table</button><a>
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
</div>

<style> .error{ color:red; } </style>


                
                </main>
              