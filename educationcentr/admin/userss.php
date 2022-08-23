














<?php 
  include("classes/admin.php");
  $admin=new admin;
  $userd=$admin->show_users();

 ?>

<!doctype html>
<html lang="en">
  <head>



 <link href="../online_quize/admin/bootstrap.min.css" rel="stylesheet"> 


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin panel</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
       
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">




    <style type="text/css">
  
    .sidebar-list
    {
        margin-right: -15px;
        
        font-family: 'Quicksand', sans-serif; 
        font-size: 14px
    }

    .sidebar-list li:hover
    {
      background-color: #F1C40F !important;
    }
     .sidebar-list li a
     {
        color:white;
        text-decoration: none;
     }

     .mytable1 .card
     {
     background: #5f2c82;  
background: -webkit-linear-gradient(to right, #49a09d, #5f2c82); 
background: linear-gradient(to right, #49a09d, #5f2c82); 
     }

     .mytable2 .card
     {
      background: #EC6F66;  
background: -webkit-linear-gradient(to right, #F3A183, #EC6F66);  
background: linear-gradient(to right, #F3A183, #EC6F66); 

     }
     .card 
     {
      overflow: hidden;
      transition: all 0.9s ease;
     }
     .card:hover
     {
      transform: scale(1.04);
     }



    

</style>



  </head>

  <body style="background-color:#f1efef">

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand text-white" href="#"><h1><b style="margin: 600px;">Education Centre</b></h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
   
  </div>
</nav>
    <div class="container-fluid" style="margin-top: 30px;" >
    <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar" >
         <ul class="list-group text-white sidebar-list">
		 <li class="list-group-item bg-white" style="height: 30px;"></li>
            <li class="list-group-item  bg-dark "><a href="http://localhost/educationcentre/admin/admin_main.php"><h1><b>Admin</b></h1> </a></li>
            <li class="list-group-item bg-white" style="height: 30px;"></li>
			<li class="list-group-item bg-warning "><a href="http://localhost/educationcentre/admin/manage_courses/manage_courses.php"><h1><b>Manage Courses</b></h1></a></li>
            <li class="list-group-item bg-white" style="height: 30px;"></li>
			<li class="list-group-item bg-dark"><a href="http://localhost/educationcentre/admin/manage_quiz/manage_quiz.php"><h1><b>Manage Quiz</b></h1></a></li>
            <li class="list-group-item bg-white" style="height: 30px;"></li>
			<li class="list-group-item bg-warning"><a href="http://localhost/educationcentre/admin/userss.php"><h1><b>Users</b></h1> </a></li>
            <li class="list-group-item bg-white" style="height: 30px;"></li>
			<li class="list-group-item bg-dark"><a href="http://localhost/educationcentre/login.php"><h1><b>Logout</b></h1></a></li>
            <li class="list-group-item bg-white" style="height: 400px;"></li>
          </ul>
        </div>

        <div class=" col-md-10">
               <div class="card-header bg-white" style="margin-right: -45px; height: 60px;">
                 <b></b>
                  
                  </div>
           








      
<div class="container my-4">
<form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">userame</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="usernameHelp" autocomplete="off>
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" autocomplete="off>
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" autocomplete="off>
  </div>
   <div class="mb-3">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>
</form>

<?php
if(isset($_post['submit']))
{
	$username=$_post['username'];
    $password=$_post['password'];
	$email=$_post['email'];
	$sql="insert into login(username,password,email) value ('$userame','$password','$email')" ;
	$result=mysqli_query($con,$sql);
	if($result){
		echo"Data inserted successfully";
}
else {
	die(mysqli_error($con));
}
}
?>

</div>

      </div>      
    </div>          























    
  </body>
</html>
