<?php include 'publisher_header.php';

$pid=$_SESSION['pid'];
 ?>

<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
<form method="post"  style="margin-top:12rem">
	<center>
		<h1>Edited Document</h1>
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
				<td><img src="/<?php echo $row['file'] ?>"></td>
				<td><?php echo $row['date'] ?></td>
				
				<td><a href="publisher_evaluate.php?aid=<?php echo $row['author_id'] ?> " class="btn btn-info">Send</a>
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