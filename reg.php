<?php include 'public_header.php';
if (isset($_POST['submit']))
 {
 	extract($_POST);
	$q="insert into login values(null,'$username','$pword','author')";
	$id=insert($q);
	$q1="insert into author values(null,'$id','$fname','$lname','$place','$email','$phone')";
	insert($q1);
	alert("successfull");
	 return redirect("login.php");
}

 ?>

<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">

<form method="post">
		
		<table class="table" style="width: 500px;">
		<h1> AUTHOR REGISTRATION</h1>
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
	

	

<?php include 'footer.php'?>