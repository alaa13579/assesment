
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




 <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

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
 </style>
</head>

<body>
	
<?php

	 require("../includes/navbar.php");    

 ?>

 <div class="container-fluid" style="margin-top: 50px;" >
      <div class="row">




<div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar" >
         <ul class="list-group text-white sidebar-list">
		 <li class="list-group-item bg-white" style="height: 30px;"></li>
            <li class="list-group-item  bg-dark "><a href="../admin_main.php"><h3><b>Admin</b></h3> </a></li>
            <li class="list-group-item bg-white" style="height: 30px;"></li>
			<li class="list-group-item bg-warning "><a href="http://localhost/educationcentre/admin/manage_courses/manage_courses.php"><h4><b>Manage Courses</b></h4></a></li>
            <li class="list-group-item bg-white" style="height: 30px;"></li>
			<li class="list-group-item bg-dark"><a href="http://localhost/educationcentre/admin/manage_quiz/manage_quiz.php"><h4><b>Manage Quiz</b></h4></a></li>
            <li class="list-group-item bg-white" style="height: 30px;"></li>
			<li class="list-group-item bg-warning"><a href="http://localhost/educationcentre/admin/userss.php"><h4><b>Users</b></h4> </a></li>
            <li class="list-group-item bg-white" style="height: 30px;"></li>
			<li class="list-group-item bg-dark"><a href="http://localhost/educationcentre/login.php"><h4><b>Logout</b></h4></a></li>
            <li class="list-group-item bg-white" style="height: 400px;"></li>
          </ul>
        </div>

        


  		<div class="col-md-10 ">   


       <div class="col-lg-12">
       	<h3 class="text-center mt-2">Manage Your Course</h3><br>
       	<table 	class="table table-striped table-hover shadow">
       		
       		<tr class="font-weight-bold">
       			<th>id</th>
       			<th>topic name</th>
       			<th>description</th>
       			<th>Update</th>
       			<th>Delete</th>

       		</tr>
       		<?php

       		 $con=mysqli_connect('localhost','root');


			mysqli_select_db($con,'educationcentre');
       		$coursename=$_GET['course_name'];
       		$q="select * from courses where course_name='$coursename'";
			$result=mysqli_query($con,$q);
			while ($res=mysqli_fetch_array($result)) {
        	

       		?>

       		<tr class=" ">
       			<td><?php echo $res['id'] ?></td>

       			<td><?php echo $res['topic_name']; ?></td>

       			<td><textarea rows="3" cols="50" class=""><?php echo html_entity_decode($res['description'],ENT_QUOTES); ?></textarea></td>

       			<td><a class=" no-gutters text-primary" href="update_topic.php?course_id=<?php echo $res['id'] ?>" style="text-decoration: none;"	><b style="color: #353935;">Update</b><i style="color: #F1C40F;" class="fa fa-pencil-square ml-2" aria-hidden="true"></i></a></td>

       			<td><a class=" no-gutters text-danger" href="verify/verify_delete.php?course_id=<?php echo $res['id'] ?>&amp;course_name=<?php echo $res['course_name']; ?>" style="text-decoration: none;"><b style="color: #353935;">Delete</b><i style="color: #F1C40F;" class="fa fa-trash-o ml-2" aria-hidden="true"></a></td>

       		</tr>

       	<?php } 

       echo '<button class="btn btn-warning" id="btn-add"><a href="add_new_topic.php?course_name='.$coursename.'" class="text-white"><b>Add a new topic</b></a></button>';

       	?>
       	</table>
       </div>




		</div>
	</div>
	</div>


<body>	
</html>