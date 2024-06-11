<?php include 'admin_header.php'?>


 


<form method="post"  style="margin-top:12rem">
	<center>
		<h1>REPORTS</h1>
		<table class="table" style="width: 500px;">
			<tr>
				<th>Sno</th>
				<th>First name</th>
				<th>Last name</th>
				<th>Place</th>
				<th>Phone</th>
				<th>Email</th>
			
			</tr>

			<?php 

 		$sq="select * from 	publisher";
 		$res=select($sq);
 		$i=1;

 		foreach ($res as $row) 
 		{
 			
 	
 		 ?>

			<tr>
				<td><?php echo $i++; ?></td>
	 			<td><?php echo $row['fname'] ?></td>
				<td><?php echo $row['lname'] ?></td>
				<td><?php echo $row['place'] ?></td>
				<td><?php echo $row['phone'] ?></td>
				<td><?php echo $row['email'] ?></td>
				
				<td><a href="admin_view_upload_work.php?sid=<?php echo $row['publisher_id'] ?> " class="btn btn-info">view assigned work</a>
			</tr>

			
			<?php 

 		}


 		 ?>

		</table>
	</center>
</form>
	<br><br><br><br>

	<?php include 'footer.php'?>