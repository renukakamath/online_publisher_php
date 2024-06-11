<?php include 'admin_header.php';
if (isset($_POST['submit']))
 {
 	extract($_POST);
	$q="insert into login values(null,'$username','$pword','publisher')";
	$id=insert($q);
	$q1="insert into publisher values(null,'$id','$fname','$lname','$phone','$email','$place')";
	insert($q1);
	alert("successfull");
	 return redirect("admin_manage_publisher.php");
}

if (isset($_GET['did']))
 {
	extract($_GET);
	$q1="delete from publisher where publisher_id='$did'";
	delete($q1);
	alert("deleted successfully");
	return redirect("admin_manage_publisher.php");
}

if (isset($_GET['uid']))
 {
	extract($_GET);
	$q1="select * from publisher where publisher_id='$uid'";
	$r=select($q1);
	}


if (isset($_POST['update']))
 {
	extract($_POST);
	$q1="update  publisher set fname='$fname',lname='$lname',phone='$phone',email='$email',place='$place' where publisher_id='$uid'";
	update($q1);
	alert("updated successfully");
	return redirect("admin_manage_publisher.php");
}




 ?>

<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">

<form method="post" >
	<center>

		<?php 
if (isset($_GET['uid'])) {
	

 ?>
	<h1>UPDATE PUBLISHER</h1>
<table class="table" style="width:500px">
	
			<tr>
				<th>First name</th>
				<td><input type="text" class="form-control" value="<?php echo $r[0]['fname'] ?>" required name="fname"></td>
			</tr>
			<tr>
				<th>Last name</th>
				<td><input type="text" class="form-control" value="<?php echo $r[0]['lname'] ?>" required name="lname"></td>
			</tr>
			<tr>
				<th>Phone</th>
				<td><input type="text" cl
					ass="form-control" value="<?php echo $r[0]['phone'] ?>" required name="phone"  class="form-control"></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" class="form-control" value="<?php echo $r[0]['email'] ?>" required name="email"></td>
			</tr>
			<tr>
				<th>Place</th>
				<td><input type="text" class="form-control" value="<?php echo $r[0]['place'] ?>" required name="place"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-primary btn-sm"  value="update" name="update"></td>
			</tr>
		</table>

		<?php 

}

else
{
 ?>
		
		<table class="table" style="width: 500px;">
		<h1>ADD PUBLISHER</h1>
			<tr>
				<th>First name</th>
				<td><input type="text" class="form-control" required name="fname"></td>
			</tr>
			<tr>
				<th>Last name</th>
				<td><input type="text" class="form-control" required name="lname"></td>
			</tr>
			<tr>
				<th>Phone</th>
				<td><input type="text" class="form-control" required name="phone"></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" class="form-control" required name="email"></td>
			</tr>
			<tr>
				<th>Place</th>
				<td><input type="text" class="form-control" required name="place"></td>
			</tr>
			<tr>
				<th>Username</th>
				<td><input type="text" class="form-control" required name="username"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" class="form-control" required name="pword"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-primary btn-sm"  value="Register" name="submit"></td>
			</tr>
		</table>

		<?php 

}
 ?>
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
 <br><br><br>
 </form>
<table>
	

	
</table>
	<center>
		<h1>PUBLISHER</h1>
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
				<td><?php echo $row['place']  ?></td>
				<td><?php echo $row['phone']  ?></td>
				<td><?php echo $row['email']  ?></td>
				
				<td><a href="?did=<?php echo $row['publisher_id'] ?>"class="btn btn-danger">Delete</a></td>
 			<td><a href="?uid=<?php echo $row['publisher_id'] ?>" class="btn btn-success">Update</a></td>
			</tr>

			<?php 

 		}


 		 ?>
		</table>
	</center>
	<br><br><br>
<?php include 'footer.php'?>