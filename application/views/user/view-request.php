<div id="layoutSidenav_content">
	 <main>
	<div id="container">

	<h1><?=$title?></h1>

	 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

	<tr>
		<th>Name</th>
		<th>Accept</th>
		<th>Delete</th>
		 
	</tr>



	<?php   

	foreach ($request as $row) {
		 
	echo '<tr>';
	echo '<td>'.$row['Name'].'</td>';
	

	


		echo '<td><a href="'.base_url().'user/approve_request/'.$row['Sender_id'].'"><button class="btn btn-success">Approve</button><a></td>';
	echo '<td><a href="'.base_url().'user/delete_request/'.$row['Request_id'].'"><button class="btn btn-danger">Delete</button><a></td>';
	 
	echo '</tr>';
	 

	}

	 


	?>
			</table>	
		</div>
	 </main>
</div>
	              