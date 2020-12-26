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
	

	


		echo '<td><a href="'.base_url().'user/view_detail/'.$row['Receiver_id'].'"><button class="btn btn-success">View Detail</button><a></td>';
	echo '<td><a href="'.base_url().'user/delete_request/'.$row['Request_id'].'"><button class="btn btn-danger">Delete</button><a></td>';
	 
	echo '</tr>';
	 

	}

	 


	?>
			</table>	
		</div>
	 </main>
</div>
	              