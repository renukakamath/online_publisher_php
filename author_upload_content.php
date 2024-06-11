<?php include 'author_header.php';

$aid=$_SESSION['aid'];
if(isset($_POST['submit']))
{
  $dir = "image/";
	$file = basename($_FILES['img']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("images_").".".$file_type;
	if(move_uploaded_file($_FILES['img']['tmp_name'],$target))
	{
  extract($_POST);     
	echo$q="insert into content values(null,'$aid','$content','$details','$target',curdate())";
	insert($q);
	echo$q1="insert into request values(null,'$aid','$pub','0',curdate(),'pending')";
	insert($q1);
	alert('successfully');
	return redirect("author_upload_content.php");
   }

    else

    {
        echo "file uploading error occured";
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


	<form method="post" enctype="multipart/form-data">
		<table class="table" style="width: 500px;">
		<h1> CONTENT</h1>
			<tr>
				<th>Publisher</th>
				<td><select name="pub" class="form-control">
					<?php 

 		$sq="select * from 	publisher";
 		$res=select($sq);
 		foreach ($res as $row) 
 		{
 		 ?>
					<option value="<?php echo $row['publisher_id'] ?>"><?php echo $row['fname'] ?></option>

<?php 

 		}


 		 ?>
				</select></td>
			</tr>
			<tr>
				<th>Content</th>
				<td><input type="text" class="form-control" required name="content"></td>
			</tr>
			<tr>
				<th>Details</th>
				<td><input type="text" class="form-control" required name="details"></td>
			</tr>
			<tr>
				<th>File</th>
				<td><input type="file" class="form-control" required name="img"></td>
			</tr>
			
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-primary btn-sm"  value="submit" name="submit"></td>
			</tr>
		</table>



	<center>
		<h1>CONTENTS</h1>
		<table class="table" style="width: 500px;">
			<tr>
				<th>Sno</th>
				<th>Content</th>
				<th>Details</th>
				<th>Files</th>
				<th>Date</th>
				
			</tr>

			<?php 

 		$sq="select * from 	content where author_id='$aid'";
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


					<td><a href="author_makepayment.php?cid=<?php echo $row['content_id'] ?>">Make Payment</a></td>

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