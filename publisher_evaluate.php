<?php include 'publisher_header.php';
$pid=$_SESSION['pid'];
extract($_GET);
if (isset($_POST['submit']))
 {
 	extract($_POST);
	$q1="insert into request value(null,'$aid','$pid','$amt',curdate(),'pending')";
	update($q1);
	alert("successfull");
	return redirect("publisher_view_request.php");
}

 ?>

<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">

<form method="post" >
	<center>
	<table class="table" style="width: 500px;">
		<h1>Amount</h1>
			<tr>
				<th>Amount</th>
				<td><input type="number" class="form-control" required name="amt"></td>
			</tr>
			
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-primary btn-sm"  value="submit" name="submit"></td>
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