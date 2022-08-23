<?php 
	 session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>education centre</title>
	
	<link rel="stylesheet" type="text/css" href="css/programming.css">






	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		.context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}


.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}

.social-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 23px;
    font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}
.social-container .col {
    border: 1px solid rgba(255, 255, 255, 0.1);
    display: inline-block; 
}
.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}



.div1                          
{
	margin-top: 5%;
   position: relative;
    height: 110px;
    width: 390px;
    background:url(img/edu.jpg);
}


	</style>



</head>
<body>



	
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
					<li> <a href="http://localhost/educationcentre/index.php"><b >Home</b></a></li>
					<li> <a href="http://localhost/educationcentre/index.php#myservice_section"><b> Service</b></a></li>
					<li> <a href="http://localhost/educationcentre/index.php#work">Our Courses</a></li>
					<li> <a href="http://localhost/educationcentre/index.php#myfaq">Contact-us</a></li>
					<li> <a href="">About</a></li>
					<li> <a href="logout.php" id="our-location" class="btn-success" id="btnn" ><b>Logout</b></a></li>
				</ul>
	                 
			</div>
		</div>
	</nav>
		



<div class="container-fluid  div1">
		
	</div>



 			
<br><br><br><br><br>
 			<section class="latest-news-area" id="latest">
 				<div class="container">
 					<div class="row">
 						<div class="col-xs-12">
 							
 						</div>
 					</div>
<br>

 					

<?php


			   
			   $con=mysqli_connect('localhost','root');


			mysqli_select_db($con,'educationcentre');

			$q="select * from programming_languages";
			$query=mysqli_query($con,$q);
			while ($res=mysqli_fetch_array($query)) {

			?>

			<div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 10px;">
 								<div class="latest-news-wrap">
 									<div class="news-img">
 										<img src=<?php echo $res['language_image']; ?> class="img-responsive">
 										<div class="deat">
 											<span><?php echo $res['language_name']; ?></span>
 										</div>
 									</div>

 									<div class="news-content">
 										<p>
 											<?php echo $res['language_description']; ?>
 										</p><br>
 										<a href="programming/java/java_programming.php?course_name=<?php echo $res['language_name'] ?>"><b >Start Reading...</b></a>
 									</div>
 								</div>
 							</div>

		

<?php } ?>



 				</div>
 				
 			</section>


 			


 	

<br><br><br><br>			
</body>
</html>