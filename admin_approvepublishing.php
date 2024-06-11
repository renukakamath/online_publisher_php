<?php include 'admin_header.php';
if (isset($_GET['aid'])) {
	extract($_GET);

	$q="update publish set status='Accept' where publish_id='$aid'";
	update($q);
	return redirect('admin_approvepublishing.php');
}


if (isset($_GET['rid'])) {
	extract($_GET);

	$q="update publish set status='Reject' where publish_id='$aid'";
	update($q);
	return redirect('admin_approvepublishing.php');
}

?>


 


<form method="post"  style="margin-top:12rem">
	<center>
		<h1>publish</h1>
			<table class="table" style="width: 500px;">
			<tr>
				<th>Sno</th>
				<th>Content</th>
				
				<th>Date</th>
				<th>Statuss</th>
				
			</tr>

			<?php 
 		$sq="select * from  publish inner join	content using (content_id)";
 		$res=select($sq);
 		$i=1;

 		foreach ($res as $row) 
 		{
 			
 	
 		 ?>

			<tr>
				<td><?php echo $i++; ?></td>
	 			<td><?php echo $row['content'] ?></td>
			
				<td><?php echo $row['published_date'] ?></td>
				<td><?php echo $row['status'] ?></td>
				
				<td><a href="?aid=<?php echo $row['publish_id'] ?> " class="btn btn-info">Accept</a>

				<td><a href="?rid=<?php echo $row['publish_id'] ?> " class="btn btn-info">Reject</a>
			</tr>

			
			<?php 

 		}


 		 ?>

		</table>
	</center>
</form>
	<br><br><br><br>

	<?php include 'footer.php'?>