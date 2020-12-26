<div id="layoutSidenav_content">
	 <main>
	<div id="container">

	<h1><?=$title?></h1>

	 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

	<tr>
		<th>Sender Id</th>
		<th>Recceiver Id</th>
		<th>Accept</th>
		<th>Edit</th>
		<th>Delete</th>
		 
	</tr>



	<?php   

	foreach ($request as $row) {
		 
	echo '<tr>';
	echo '<td>'.$row['Sender_id'].'</td>';
	echo '<td>'.$row['Receiver_id'].'</td>';
	echo '<td>'.$row['Accept'].'</td>';

	


		echo '<td><a href="'.base_url().'admin/edit_request/'.$row['Request_id'].'"><button class="btn btn-success">Edit</button><a></td>';
	echo '<td><a href="'.base_url().'admin/delete_request/'.$row['Request_id'].'"><button class="btn btn-danger">Delete</button><a></td>';
	 
	echo '</tr>';
	 

	}

	 


	?>
			</table>	
		</div>
	 </main>
</div>
	              