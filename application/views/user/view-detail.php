<div id="layoutSidenav_content">
	 <main>
	<div id="container">

	<h1><?=$title?></h1>

	 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Date Of Birth</th>
		<th>Picture</th>
		<th>Height</th>
		<th>NID</th>
		<th>Gender</th>
		<th>Status</th>
		<th>Type</th>
		<th>Religion</th>
		<th>Place_id</th>
		<th>Contact Number</th>
		<th>Earning Status</th>
		<th>Educational Qualification</th>
		 
		 
	</tr>



	<?php   

	foreach ($user as $row) {
		 
	echo '<tr>';
	echo '<td>'.$row['ID'].'</td>';
	echo '<td>'.$row['Name'].'</td>';
	echo '<td>'.$row['Email'].'</td>';

	echo '<td>'.$row['Address'].'</td>';
	echo '<td>'.$row['Date_of_Birth'].'</td>';
	echo '<td><img width="100px;" height="100px;" src="'.base_url().'image/'.$row['Picture'].'" alt=""></td>';
	echo '<td>'.$row['Height'].'</td>';
	echo '<td>'.$row['NID'].'</td>';
	echo '<td>'.$row['Gender'].'</td>';
	echo '<td>'.$row['Status'].'</td>';
	echo '<td>'.$row['Type'].'</td>';
	echo '<td>'.$row['Religion'].'</td>';
	echo '<td>'.$row['Place_id'].'</td>';
	echo '<td>'.$row['Contact_Number'].'</td>';
	echo '<td>'.$row['Earning_Status'].'</td>';
	echo '<td>'.$row['Educational_Qualification'].'</td>';


	echo '<td><a href="'.base_url().'user/request_user/'.$row['ID'].'"><button class="btn btn-success">Request</button><a></td>';
	
	 
	echo '</tr>';
	 

	}

	 


	?>


			</table>	
		</div>
	 </main>
</div>
	              