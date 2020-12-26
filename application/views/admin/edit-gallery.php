
            <div id="layoutSidenav_content">
                <main>

                    <div id="container">

<h1><?=$title?></h1>

<div class="col-md-4">
<form action="" method="post"  enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>

<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Picture" value="<?php if(set_value('Picture')){ echo set_value('Picture'); }else{ echo $gallery[0]['Picture']; }?>"  name="Picture" >

	</div>

	<div class="error"><?=form_error('Picture')?></div>
	
	<div class="form-group">

		<input type="text" class="form-control" place_nameholder="Enter Your User Id" value="<?php if(set_value('user_id')){ echo set_value('user_id'); }else{ echo $gallery[0]['user_id']; }?>" name="user_id"  >

	</div>

	<div class="error"><?=form_error('user_id')?></div>






	<div class="form-group">

		<input type="submit"  tbl_gallery="submit" class="btn btn-success" value="Edit data Now" > 
		<a href="<?=base_url()?>admin/view-gallery/"><button type="button" class="btn btn-success">Back To Table</button><a>
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
</div>

<style> .error{ color:red; } </style>


</main>
              