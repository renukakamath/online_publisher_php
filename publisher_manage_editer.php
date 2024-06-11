<?php include 'publisher_header.php';
if (isset($_POST['submit']))
 {
 	extract($_POST);
	$q="insert into login values(null,'$username','$pword','editer')";
	$id=insert($q);
	$q1="insert into editor values(null,'$id','$fname','$lname','$phone','$email','$place')";
	insert($q1);
	alert("successfull");
	 return redirect("publisher_manage_editer.php");
}

if (isset($_GET['did']))
 {
	extract($_GET);
	$q1="delete from editor where editor_id='$did'";
	delete($q1);
	alert("deleted successfully");
	return redirect("publisher_manage_editer.php");
}

if (isset($_GET['uid']))
 {
	extract($_GET);
	$q1="select * from editor where editor_id='$uid'";
	$r=select($q1);
	}


if (isset($_POST['update']))
 {
	extract($_POST);
	$q1="update  editor set fname='$fname',lname='$lname',phone='$phone',email='$email',place='$place' where editor_id='$uid'";
	update($q1);
	alert("updated successfully");
	return redirect("publisher_manage_editer.php");
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
	<h1>UPDATE EDITER</h1>
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
		<h1>ADD EDITER</h1>
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
</center>
		<?php 

}
 ?>




	

	
</table>
	<center>
		<h1>EDITER</h1>
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
	 			<td><?php echo $row['fname'] ?></td>
				<td><?php echo $row['lname'] ?></td>
				<td><?php echo $row['place']  ?></td>
				<td><?php echo $row['phone']  ?></td>
				<td><?php echo $row['email']  ?></td>
				
			<td><a class="btn btn-danger" href="?did=<?php echo $row['editor_id'] ?>">Delete</a></td>
 			<td><a class="btn btn-success" href="?uid=<?php echo $row['editor_id'] ?>">Update</a></td>
			</tr>

			<?php 

 		}


 		 ?>
		</table>
	</center>
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