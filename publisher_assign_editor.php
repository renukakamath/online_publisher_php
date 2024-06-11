<?php include 'publisher_header.php';
$pid=$_SESSION['pid'];
extract($_GET);
if (isset($_POST['submit']))
 {
 	extract($_POST);
	echo$q1="insert into assign values(null,'$aid','$pid','pending')";
	insert($q1);
	alert("successfull");
	 return redirect("publisher_assign_editor.php");
}

if (isset($_GET['did']))
 {
	extract($_GET);
	$q1="delete from assign where assign_id='$did'";
	delete($q1);
	alert("deleted successfully");
	return redirect("publisher_assign_editor.php");
}

 ?>

<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">

<form method="post">
	<center>

		
		<table class="table" style="width: 500px;">
		<h1>ASSIGN EDITOR</h1>
			<tr>
				<th>Editor</th>
				<td><select name="aid" required="" class="form-control">
					<option>Select</option>
					<?php 

                   $q="select * from editor ";
                   $res=select($q);
                   foreach ($res as $row) {
                   	?>
                 <option value="<?php echo $row['editor_id'] ?>"><?php echo $row['fname'] ?> <?php echo $row['lname'] ?></option>
                 <?php 
                  }


					 ?>
				</select></td>
			</tr>
			
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-primary btn-sm"   name="submit"></td>
			</tr>
		</table>

		

 <br><br><br>
 </form>
<table>
	

	
</table>
		<br><br><br>
		<h1>ASSIGN EDITOR</h1>
		<table class="table" style="width: 500px;">
			<tr>
				<th>Sno</th>
				<th>Editor name</th>
				
				<th>Status</th>
				
				
			</tr>
			<?php 
         
 		$sq="select * from 	assign inner join editor using(editor_id)";
 		$res=select($sq);
 		$i=1;

 		foreach ($res as $row) 
 		{
 			
 	
 		 ?>

			<tr>
	 			<td><?php echo $i++; ?></td>
	 			<td><?php echo $row['fname'] ?> <?php echo $row['lname'] ?></td>
				<td><?php echo $row['status']  ?></td>
				
				
				<td><a href="?did=<?php echo $row['assign_id'] ?>"class="btn btn-danger">Delete</a></td>
 			
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
<?php include 'footer.php' ?>
