<?php include 'editer_header.php';
extract($_GET);
$eid=$_SESSION['eid'];

if (isset($_GET['uid']))
 {
	extract($_GET);
	$q1="select * from content where content_id='$uid'";
	$r=select($q1);
	}
if (isset($_POST['update'])) {
	extract($_POST);
	{ 
		$dir = "image/";
		$file = basename($_FILES['img']['name']);
		$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
		$target = $dir.uniqid("image_").".".$file_type;
		if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
		{
		$q="update content set file='$target' where content_id='$uid'";
		update($q);
		$s1="update assign set status='edited' where assign_id='$s'";
		update($s1);
		alert(' Successfully');
		return redirect('editer_view_content.php');
		}
		else
		{
			echo "file uploading error occured";
		}
	}
}

if (isset($_GET['did'])) {
	extract($_GET);

	$q="delete from content where content_id='$did'";
	delete($q);
	alert(' Successfully');
	return redirect('author_upload_content.php');

}

 ?>
<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">


			<?php 
if (isset($_GET['uid'])) {
	

 ?>
 <form method="post" enctype="multipart/form-data">
	<h1>UPDATE CONTENT</h1>
<table class="table" style="width:500px">
	
			
			<tr>
				<th>File</th>
				<td><input type="file" class="form-control" value="<?php echo $r[0]['file'] ?>" required name="img"  class="form-control"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-primary btn-sm"  value="update" name="update"></td>
			</tr>
		</table>

<?php 

 		}


 		 ?>



	<center>
		<h1>CONTENTS</h1>
		<table class="table" style="width: 500px;">
			<tr>
				<th>Sno</th>
			
				<th>Files</th>
				
				
			</tr>

			<?php 

 		$sq="select * from 	content where content_id='$uid'";
 		$res=select($sq);
 		$i=1;

 		foreach ($res as $row) 
 		{
 			
 	
 		 ?>

			<tr>
				<td><?php echo $i++; ?></td>
				<td><img src="<?php echo $row['file'] ?>" width=100 height=100></td>
				
				<td><a href="?did=<?php echo $row['content_id'] ?> " class="btn btn-info">Delete</a>
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