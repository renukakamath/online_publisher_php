<?php include 'publisher_header.php'?>


 

<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
<form method="post"  style="margin-top:12rem">
	<center>
		<h1>EDITORS</h1>
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

 		$sq="select * from 	editor";
 		$res=select($sq);
 		$i=1;

 		foreach ($res as $row) 
 		{
 			
 	
 		 ?>

			<tr>
				<td><?php echo $i++; ?></td>
	 			<td><?php echo $row['f_name'] ?></td>
				<td><?php echo $row['l_name'] ?></td>
				<td><?php echo $row['place'] ?></td>
				<td><?php echo $row['phone'] ?></td>
				<td><?php echo $row['email'] ?></td>
				
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