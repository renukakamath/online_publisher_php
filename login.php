<?php  include 'public_header.php';
if (isset($_POST['submit'])) 
{
	extract($_POST);
	$q1="select * from login where username='$username' and password='$password'";
	$res=select($q1);
	if (sizeof($res)>0) 
	{

		$_SESSION['lid']=$res[0]['login_id'];
		$lid=$_SESSION['lid'];
		if ($res[0]['usertype']=="admin") 
		{
			alert("login successfully");
			return redirect("admin_home.php");
		}
		if($res[0]['usertype']=="publisher")
		{
			$q1="select * from publisher where login_id='$lid'";
			$res1=select($q1);
			if (sizeof($res1)>0)
			 {
			 	$_SESSION['pid']=$res1[0]['publisher_id'];
			 	$pid=$_SESSION['pid'];
			 	alert("login successfully");
				return redirect("publisher_home.php");
			}
			
		}
		if($res[0]['usertype']=="author")
		{
			$q1="select * from author where login_id='$lid'";
			$res1=select($q1);
			if (sizeof($res1)>0)
			 {
			 	$_SESSION['aid']=$res1[0]['author_id'];
			 	$aid=$_SESSION['aid'];
			 	alert("login successfully");
				return redirect("author_home.php");
			}
			
		}
		if($res[0]['usertype']=="editer")
		{
			$q1="select * from editor where login_id='$lid'";
			$res1=select($q1);
			if (sizeof($res1)>0)
			 {
			 	$_SESSION['eid']=$res1[0]['editor_id'];
			 	$eid=$_SESSION['eid'];
			 	alert("login successfully");
				return redirect("editer_home.php");
			}
			
		}
		if($res[0]['usertype']=="user")
		{
			$q1="select * from user where login_id='$lid'";
			$res1=select($q1);
			if (sizeof($res1)>0)
			 {
			 	$_SESSION['uid']=$res1[0]['user_id'];
			 	$uid=$_SESSION['uid'];
			 	alert("login successfully");
				return redirect("user_home.php");
			}
			
		}
		
    }
	
	else
	{
		alert("invalid username or password");
	}
}
 ?>





 <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
           <center>
		<form method="post">
			<h1>Login</h1>
			<table class="table" style="width:500px">
				<tr>
					<th>Username</th>
					<td><input type="text" name="username" class="form-control" required="" pattern="[A-Za-z ]+$"></td>
				</tr>
				<tr>
					<th>Password</th>
					<td><input type="password" name="password" class="form-control" required="" maxlength="8"></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="submit" value="Login" class="btn btn-danger"></td>
				</tr>
			</table>
		</form>
	</center>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            
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



<?php  include 'footer.php'?>
