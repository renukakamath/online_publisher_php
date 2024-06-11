<?php include 'publisher_header.php';
$pid=$_SESSION['pid'];
if (isset($_GET['aid']))
 {
	extract($_GET);
	$q1="update request set status='accepted' where request_id='$aid'";
	update($q1);
	alert("accepted successfully");
	return redirect("publisher_evaluate.php");
}
if (isset($_GET['rid']))
 {
	extract($_GET);
	$q1="update request set status='rejected' where request_id='$rid'";
	update($q1);
	alert("rejected successfully");
	return redirect("publisher_home.php");
}
?>
 
<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">

<form method="post">
	<center>
		<h1>Requests</h1>
		<table class="table" style="width: 500px;">
			<tr>
				<th>Sno</th>
				<th>Author name</th>
				<th>Amount</th>
				<th>Date</th>
				<th>Status</th>
				
				
			</tr>

			<?php 

 		$sq="select * from 	request inner join author using(author_id) where publisher_id='$pid'";
 		$res=select($sq);
 		$i=1;

 		foreach ($res as $row) 
 		{
 			
 	
 		 ?>

			<tr>
				<td><?php echo $i++; ?></td>
	 			<td><?php echo $row['fname'] ?> <?php echo $row['lname'] ?></td>
				<td><?php echo $row['amount'] ?></td>
				<td><?php echo $row['date'] ?></td>
				
				
				 <?php 
              if ($row['status']=="pending") {?>
              	 
              	 <td><a href="?aid=<?php echo $row['request_id'] ?>" class="btn btn-success">accept</a></td>
              	 <td><a href="?rid=<?php echo $row['request_id'] ?>" class="btn btn-danger">reject</a></td>

              <?php }
               else{



              ?>
              	<td><?php echo $row['status'] ?></td>
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

	<?php include 'footer.php'?>