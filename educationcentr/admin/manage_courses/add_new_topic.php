
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

            <div><h3 class="text-center mt-2">Add a new topic</h3></div>

            <form  method="POST" action="verify/verify_changes.php" class="ml-3" onsubmit="return validation()">
            
         
                
                Enter course name:<input type="text" name="coursename" id="coursename" class="form-control" readonly="readonly" value="<?php echo $_GET['course_name'] ?>"> <span id="name_error"></span><br>

                 Enter topic name :<input type="text" name="topic_name" id="topic_name" class="form-control">
                 <span id="desc_error" class="text-danger small" ></span>

                <textarea id="editor" name="editor" id="editor" class="ckeditor" placeholder="Enter the content..."></textarea>
                <span id="editor_error"  class="text-danger small"></span><br>

                <button type="submit" name="submitbtn" class="btn btn-warning"><b style="color: white;">submit</b></button>
             </form>

                </div>



  </div>
  </div>




<script type="text/javascript">
  

  
  function validation()
  {
    var name=document.getElementById('coursename').value;
    var topicname=document.getElementById('topic_name').value;
    var editor=document.getElementById('editor').value;
    if (name=="")
    { 
      document.getElementById('name_error').innerHTML="** please enter topic name";
      return false;

    }

    if (topicname=="")
    { 
      document.getElementById('desc_error').innerHTML="** please enter topic name";
      return false;

    }
    if (editor=="")
    { 
      document.getElementById('editor_error').innerHTML="** please enter the description";
      return false;

    }
  }
         

</script>



 <script src="../ckeditor/ckeditor.js"></script>   
<body>  
</html>