<div id="layoutSidenav_content">
	 <main>
	<div id="container">

	<h1><?=$title?></h1>

	 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

	<tr>
		 
		<th>Name</th>
		<th>Dob</th>
		<th>Picture</th>
	
		<th>Educational Qualification</th>
		<th>Send Request</th>
		s
		 
	</tr>



	<?php   

	foreach ($user as $row) {
		 
	echo '<tr>';
	 
	echo '<td>'.$row['Name'].'</td>';
	 
	echo '<td>'.$row['Date_of_Birth'].'</td>';
	echo '<td><img width="100px;" height="100px;" src="'.base_url().'image/'.$row['Picture'].'" alt=""></td>';
	
	echo '<td>'.$row['Educational_Qualification'].'</td>';


	echo '<td><a href="'.base_url().'user/request_user/'.$row['ID'].'"><button class="btn btn-success">Request</button><a></td>';
	
	 
	echo '</tr>';
	 

	}

	 


	?>


			</table>	
		</div>
	 </main>
</div>
	              