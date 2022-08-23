<?php


session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');
	

}



?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>Education Centre</title>
	
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">


	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>


	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>


	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>







	<style type="text/css">
	



	html
	{
		scroll-behavior:smooth;
	}
	</style>




</head>
<body onload="myfunction()">
		

		   <div id="loading"></div>

		   

		   <nav class="navbar navbar-dark bg-warning">
		<div class="container">
			<div class="navbar-header">
			
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead"></h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                
				<ul class="nav navbar-nav navbar-right">
					<li> <a href=""><b >Home</b></a></li>
					<li> <a href="#myservice_section"><b> Service</b></a></li>
					<li> <a href="#work">Our Courses</a></li>
					<li> <a href="#myfaq">Contact-us</a></li>
					<li> <a href="">About</a></li>
					<li> <a href="logout.php" id="our-location" class="btn-success" id="btnn" ><b>Logout</b></a></li>
				</ul>
	                 
			</div>
		</div>
	</nav>
	



	<div class="modal fade modal-dialog-centered" id="mymodal">
	<div class="modal-dialog ">
	<div class="modal-content">
	<h3 id="login-heading">Login</h3>
						
	<div class="modal-body" >
	<div class="left-box">
	<form method="POST" action="validation.php">
		<div class="form-group">
			<label><i class="fa fa-user fa-2x"></i>Username :</label>
	<input type="text" name="name" class="form-control">
		<label><i class="fa fa-lock fa-2x"></i>Password :</label>
	<input type="password" name="password" class="form-control">
	<button id="btn-login" type="submit">Login</button>
								
	</div>
	<div class="register">
	<h2>Don't have an account?&nbsp<span id="create-account"><a href="signup.html">Create</span></a> </h2>
							</div>
							
						</form>
					</div>
				
						
					</div>
					
						
				</div>
			</div>
		</div>

       

         <br><br>
         <div class="container-fluid servicebody" id="myservice_section">
         <div class="service-are" id="service">
         	<div class="row">
         		<div class="col-xs-12">
         			<div class="section-title text-center">
         				<h2><b>SERVICES</b></h2>
         				<p>
         					
         				</p>
         			</div>
         		</div>
         	</div>
         	<div class="row">
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-leaf"></i>
         				</div>
         				<h3><a href="programmingdemo.php">Education Courses</a></h3>
         				<p>
         					Here you will find all the lecture  related to programming languages 
         					(HTML,CSS,JAVASCRIPT,PHP,MYSQL) 
         				</p>
         			</div>
         		</div>

         	
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="online_quize/quizhome.php">Quiz</a></h3>   
         				<p>
         					Here you will find problem programs for practice and their implementation also which will improve your coding skill
         				</p>
         			</div>
         		</div>

         		
</div>
			<section class="work" id="work"><br>
				<h2 id="work-heading" class="text-center" style="font-weight: bold;">Our Courses</h2>
				
				<div class="container-fluid">
					
					<div class="row no-gutters">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work1.png" title="this is a sky image">
								<img src="img/work1.png" class="img-responsive" >
							</a>
							
							

						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work2.png" title="this is a sky image">
								<img src="img/work2.png" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work3.png" title="this is a sky image">
								<img src="img/work3.png" class="img-responsive" style="height: 173px;">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work4.png" title="this is a sky image">
								<img src="img/work4.png" class="img-responsive" style="height: 173px;">
							</a>
							
						</div>
						
					</div>


			
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work5.png" title="this is a sky image">
								<img src="img/work5.png" class="img-responsive" style="height: 173px;">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work6.png" title="this is a sky image">
								<img src="img/work6.png" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work7.png" title="this is a sky image">
								<img src="img/work7.png" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work8.png" title="this is a sky image">
								<img src="img/work8.png" class="img-responsive" style="height: 173px;">
							</a>
							
						</div>
						
					</div>


				</div>
				


			</section>


			<br><br><br>
			


			<br><br><br>
			<section class="faq" id="myfaq">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2><b>Contact us</b></h2>
							<div class="sub-heading">
								
							</div>
						</div>	

					</div>
				</div> <br><br><br>
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<div class="panel-group" id="accordian">


								<?php 

								  $con=mysqli_connect('localhost','root');
									   if (!$con) {
									   	die('connection failed'.mysqli_connect_error());
									   }

									mysqli_select_db($con,'educationcentre');

									$sql="select * from faq";
									$result=mysqli_query($con,$sql);
									while ($row=mysqli_fetch_array($result))
									{
					?>

	<div class="panel panel-default">
		<div class="panel-heading" id="headingOne">
	<h4 class="panel-title">
		<a href="#<?php echo $row['id']; ?>" data-toggle="collapse" class="collapse" data-parent="#accordian"><?php echo $row['faq_title']; ?></a>
	</h4>
	</div>
	<div id="<?php echo $row['id']; ?>" class="panel-collapse collapse " aria-labelledby="headingOne">
		<div class="panel-body">
		<p>
	<?php echo $row['faq_description']; ?>
				</p>
										</div>
									</div>
								</div>

							<?php } ?>



								<div class="panel panel-default">
									<div class="panel-heading" id="headingTwo">
										<h4 class="panel-title">
											<a href="#collapseTwo" class="collapsed" data-toggle="collapse" data-parent="#accordian">Facebook</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">
										<div class="panel-body">
											<p>
												Education Center	
											</p>
										</div>
									</div>
								</div>




								
							</div>
						</div>

						<div class="freeimage" id="meimg">
							<div class="col-md-2 col-md-offset">
								<img src="img/faq1.png" style="width: 500px; height: 300px;">
							</div>
						</div>

					</div>
				</div>
				

			</section>




<script type="text/javascript">
	
	var preloader=document.getElementById('loading');
	function myfunction()
	 {
		preloader.style.display='none';
	}


	function addButton() {
		var body=document.getElementsByTagName('body')[0];
		var myfaq1=document.getElementById('myfaq');
		var btn=document.createElement('button');
		btn.innerHTML='sunil';
		myfaq1.appendChild(btn);
		body.appendChild(myfaq);
	}



</script>

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>





</body>
</html>