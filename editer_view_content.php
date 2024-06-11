<?php include 'editer_header.php';
	$eid=$_SESSION['eid'];
if (isset($_GET['reid']))
 {
	extract($_GET);
	$q1="update request set status='upload to publisher' where request_id='$reid'";
	update($q1);
	alert("accepted successfully");
	return redirect("editer_view_content.php");
}
if (isset($_GET['aid']))
 {
	extract($_GET);
	$q1="update assign set status='accepted' where assign_id='$aid'";
	echo($q1);
	update($q1);
	// alert("accepted successfully");
	// return redirect("editer_view_content.php");
}
if (isset($_GET['rid']))
 {
	extract($_GET);
	$q1="update assign set status='rejected' where assign_id='$rid'";
	update($q1);
	alert("rejected successfully");
	return redirect("editer_home.php");
}

 ?>

<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
<form method="post">
	<center>
		<form method="post" enctype="multipart/form-data">
		<h1>CONTENT</h1>
		<table class="table" style="width: 500px;">
			<tr>
				<th>Sno</th>
				<th>Content</th>
				<th>Details</th>
				<th>Files</th>
				<th>Date</th>
				<th>Status</th>
				<th></th>
				
			</tr>

			<?php 

 		$sq="SELECT *,assign.status AS a_st,request.status as r_st FROM `assign` INNER JOIN request USING(publisher_id) INNER JOIN content USING(author_id)  WHERE editor_id='$eid' GROUP BY content_id";
 		($sq);
 		$res=select($sq);
 		$i=1;

 		foreach ($res as $row) 
 		{
 			
 	
 		 ?>

			<tr>
				<td><?php echo $i++; ?></td>
	 			<td><?php echo $row['content'] ?></td>
				<td><?php echo $row['details'] ?></td>
				<td><img src="<?php echo $row['file'] ?>" width=100 height=100></td>
				<td><?php echo $row['date'] ?></td>
				 <?php 
              if ($row['a_st']=="pending") {?>
              	 
              	 <td><a href="?aid=<?php echo $row['assign_id'] ?>" class="btn btn-success">accept</a></td>
              	 <td><a href="?rid=<?php echo $row['assign_id'] ?>" class="btn btn-danger">reject</a></td>

              <?php }
               else{



              ?>
              	<td><?php echo $row['a_st'] ?></td>
              </tr>
           <?php
             }
          

			 ?>
				<td><a href="editer_update.php?uid=<?php echo $row['content_id'] ?> " class="btn btn-info">Edit</a>
				<?php 
              if ($row['r_st']=="accepted") {?>
              	 
              	 <td><a href="?reid=<?php echo $row['request_id'] ?>" class="btn btn-success">upload publish</a></td>
              	 

              <?php }
               else{



              ?>
              	<td><?php echo $row['a_st'] ?></td>
              </tr>
           <?php
             }
          

			 ?>
			</tr>

			
			<?php 

 		}


 		 ?>

		</table>
	</center>
</form>
<div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <!-- <a href="login.php" class="btn-book-a-table">Login Here</a>  -->
            <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/hero-img.webp" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">	

	<?php include 'footer.php'?>