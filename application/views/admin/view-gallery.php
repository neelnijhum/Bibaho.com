<div id="layoutSidenav_content">
	 <main>
	<div id="container">

	<h1><?=$title?></h1>

	 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

	<tr>
		<th>Picture</th>
		<th>User Id</th>
		<th>Edit</th>
		<th>Delete</th>
		 
	</tr>



	<?php   

	foreach ($gallery as $row) {
		 
	echo '<tr>';
	echo '<td><img width="100px;" height="100px;" src="'.base_url().'image/'.$row['Picture'].'" alt=""></td>';
	echo '<td>'.$row['user_id'].'</td>';
	


	echo '<td><a href="'.base_url().'admin/edit_gallery/'.$row['g_id'].'"><button class="btn btn-success">Edit</button><a></td>';
	echo '<td><a href="'.base_url().'admin/delete_gallery/'.$row['g_id'].'"><button class="btn btn-danger">Delete</button><a></td>';
	 
	echo '</tr>';
	 

	}

	 


	?>
			</table>	
		</div>
	 </main>
</div>
	              