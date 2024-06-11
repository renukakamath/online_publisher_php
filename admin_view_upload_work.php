<?php include 'admin_header.php'?>


 


<form method="post"  style="margin-top:12rem">
	<center>
		<h1>Works</h1>
			<table class="table" style="width: 500px;">
			<tr>
				<th>Sno</th>
				<th>Content</th>
				<th>Details</th>
				<th>Files</th>
				<th>Date</th>
				
			</tr>

			<?php 

 		$sq="select * from 	content";
 		$res=select($sq);
 		$i=1;

 		foreach ($res as $row) 
 		{
 			
 	
 		 ?>

			<tr>
				<td><?php echo $i++; ?></td>
	 			<td><?php echo $row['content'] ?></td>
				<td><?php echo $row['details'] ?></td>
				<td><img src="<?php echo $row['file'] ?>" width="100" height="100"></td>
				<td><?php echo $row['date'] ?></td>
				
				<td><a href="?did=<?php echo $row['content_id'] ?> " class="btn btn-info">Delete</a>
			</tr>

			
			<?php 

 		}


 		 ?>

		</table>
	</center>
</form>
	<br><br><br><br>

	<?php include 'footer.php'?>