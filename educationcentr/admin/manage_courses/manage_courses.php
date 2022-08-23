<?php 
include("../classes/manage_courses_class.php");
$courses=new manage_courses_class;			
$course=$courses->display_courses();    

 ?>


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
      background-color:#F1C40F !important;
    }
     .sidebar-list li a
     {
        color:white;
        text-decoration: none;
     }
     .card1
     {
     	font-family: 'Open Sans', sans-serif;
     }
     .cardh2
     {
     	font-family: 'Lato', sans-serif;

     }





body {
    background-color: #f7f8f9;
}

.card {
    background-color: #ffffff;
    border: 1px solid rgba(0, 34, 51, 0.1);
    box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);
    border-radius: 0.15rem;
}



.tab-card {
  border:1px solid #eee;
}

.tab-card-header {
  background:none;
}

.tab-card-header > .nav-tabs {
  border: none;
  margin: 0px;
}
.tab-card-header > .nav-tabs > li {
  margin-right: 2px;
}
.tab-card-header > .nav-tabs > li > a {
  border: 0;
  border-bottom:2px solid transparent;
  margin-right: 0;
  color: #737373;
  padding: 2px 15px;
}

.tab-card-header > .nav-tabs > li > a.show {
    border-bottom:2px solid #007bff;
    color: #007bff;
}
.tab-card-header > .nav-tabs > li > a:hover {
    color: #007bff;
}

.tab-card-header > .tab-content {
  padding-bottom: 0;
}


 </style>
 </head>
 <body onload="">
 
 

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand text-white" href="../admin_main.php"><h3><b style="margin: 260%;">Education Centre</b></h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 
  </div>
</nav>

				



<div class="container-fluid" style="margin-top: 50px;" >
      <div class="row">





	  <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar" >
         <ul class="list-group text-white sidebar-list">
		 <li class="list-group-item bg-white" style="height: 30px;"></li>
            <li class="list-group-item  bg-dark "><a href="../admin_main.php"><h3><b>Admin</b></h3> </a></li>
            <li class="list-group-item bg-white" style="height: 30px;"></li>
			<li class="list-group-item bg-warning "><a href="manage_courses.php"><h4><b>Manage Courses</b></h4></a></li>
            <li class="list-group-item bg-white" style="height: 30px;"></li>
			<li class="list-group-item bg-dark"><a href="../manage_quiz/manage_quiz.php"><h4><b>Manage Quiz</b></h4></a></li>
            <li class="list-group-item bg-white" style="height: 30px;"></li>

			<li class="list-group-item bg-dark"><a href="../../login.php"><h4><b>Logout</b></h4></a></li>
            <li class="list-group-item bg-white" style="height: 400px;"></li>
          </ul>
        </div>

        


  		<div class="col-md-10 ">


 

		  <li class="list-group-item bg-white" style="height: 30px;"></li>
<ul class="nav nav-tabs">
	
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home"><h5><b style="color:#353935;">Home</b></h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#manage_course"><h5><b style="color:#353935;" >Manage Course</b></h5></a>
  </li>
 
</ul>
		


<div class="tab-content">






  <div class="tab-pane container active" id="home">
<div class="card-header mt-3 mr-5 bg-white text-info border-0 shadow card1" style="width: 1050px; box-shadow: 1px 1px 1px 1px #ccc"><b style="margin:400px; color:#353935;">YOUR COURSES</b></div><br>
<div class="row">


<?php foreach ($course as $course_list)
 {
	?>
  	
  		<div class="card ml-5 mt-4" style="width: 18rem;">
  <img class="card-img-top" src="../../<?php echo $course_list['language_image'] ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $course_list['language_name']; ?> <a href="edit_topics.php?course_name=<?php echo $course_list['language_name']; ?>" class="h6 text-info float-right"><b style="color:#353935;">edit topic </b><b style="color: #353935;"><i class="fa fa-pencil ml-1"></i></b></a></h5>
    <p class="card-text"><?php echo $course_list['language_description']; ?></p>

 
  </div>
</div>

<?php } ?>


</div>


						
	<?php 

	if ( isset($_GET['status']) and $_GET['status']=="added")      
	{
		echo '<div class="col-md-4 mt-5">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				  Open modal
				</button>






				<!-- The Modal -->
				<div class="modal fade" id="myModal">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title">Message</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body">
				        course added successfully
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				      </div>

				    </div>
				  </div>
				</div>
				</div>';
		}


	if ( isset($_GET['status']) and $_GET['status']=="deleted")    
	{
		echo '<div class="col-md-4 mt-5">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				  Open modal
				</button>






				<!-- The Modal -->
				<div class="modal fade" id="myModal">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title">Message</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body">
				        	course deleted successfully
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				      </div>

				    </div>
				  </div>
				</div>
				</div>';
			}



	if ( isset($_GET['status']) and $_GET['status']=="updated")    
	{
		echo '<div class="col-md-4 mt-5">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				  Open modal
				</button>






				<!-- The Modal -->
				<div class="modal fade" id="myModal">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title">Message</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body">
				        	course updated successfully
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				      </div>

				    </div>
				  </div>
				</div>
				</div>';
			}





	 ?>


	 			












</div>



  <div class="tab-pane container fade" id="manage_course">
  	



  		<center><div class="col-md-7">


<div class="card mt-3 tab-card">
        <div class="card-header tab-card-header">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true"><b>ADD</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false"><b>UPDATE</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false"><b>DELETE</b></a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="myTabContent">   


        	

          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">

            <div class="card-body col-md-12">
            	



            		<div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
				  <div class="card-header bg-warning text-light p-2 cardh2" ><h3><b>ADD NEW COURSE</b></h3></div>
				  
				  <div class="card-body small" >

				  <form action="course_add.php" method="post" enctype="multipart/form-data" onsubmit="return validation()">
					    <div class="form-group">
					      <label for="email"><b>Course Name :</b></label>
					      <input type="text" class="form-control" id="c_name" placeholder="Enter Course Name" name="course_name">
					      <span id="name_error" class="text-danger font-weight-bold"></span>
					    </div>
					    <div class="form-group">
					      <label for="pwd"><b>Course Description</b></label>
					      <input type="text" class="form-control" id="c_desc" placeholder="Enter Course Description" name="course_desc">
					      <span id="desc_error" class="text-danger font-weight-bold"></span>
					    </div>

					     <div class="form-group">
					      <label for="pwd"><b>Course Image</b></label>
					      <input type="file" class="form-control" id="c_img" placeholder="Enter Course Image" name="course_image">
					      <span id="image_error" class="text-danger font-weight-bold"></span>
					    </div>
					    
					    <div class="">
					    <button type="submit" class="btn btn-warning"  name="btn_add"><b style="color: white;">Submit</b></button>
						</div>
				  </form>

				</div>
			</div>
            </div>
          </div>
          								


          <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
           
            <div class="card-body col-md-12">
            	

            		<div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
				  <div class="card-header bg-warning text-light p-2 cardh2 "><h3><b>UPDATE COURSE</b></h3></div>
				  
				  <div class="card-body small" >
					    
				 

				 <form action="course_add.php" method="post" enctype="multipart/form-data" onsubmit="">


				 	 <div class="form-group">

					    <label for="exampleFormControlSelect1"><b>Select Course Name :</b></label>
					    <select class="form-control" id="exampleFormControlSelect1" name="selected-course-to-update">

					    	<?php  foreach ($course as $course_list)
							 {
										?> 
					      <option><?php echo  $course_list['language_name']; ?></option>
					      <?php } ?>

					    </select>
					  </div>
					   
					    
					    <div class="form-group">
					      <label for="pwd"><b>Course Description</b></label>
					      <input type="text" class="form-control" id="c_desc" placeholder="Enter Course Description" name="course_desc">
					      <span id="desc_error" class="text-danger font-weight-bold"></span>
					    </div>

					     <div class="form-group">
					      <label for="pwd"><b>Course Image</b></label>
					      <input type="file" class="form-control" id="c_img" placeholder="Enter Course Image" name="course_image">
					      <span id="image_error" class="text-danger font-weight-bold"></span>
					    </div>
					    
					    <div class="">
					    <button type="submit" class="btn btn-warning"  name="btn_update"><b style="color: white;">Submit</b></button>
						</div>
				  </form>

				</div>
			</div>


            </div>           
          </div>


          									


          <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
           
            <div class="card-body col-md-12">
            	



            		<div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
				  <div class="card-header bg-warning text-light p-2 cardh2"><h3><b>DELETE COURSE</b></h3></div>
				  
				  <div class="card-body small" ">

				  <form action="course_add.php" method="post" enctype="multipart/form-data">
					   <div class="form-group">
					    <label for="exampleFormControlSelect1"><b>Select Course</b></label>
					    <select class="form-control" id="exampleFormControlSelect1" name="selected_course">
					      <?php  foreach ($course as $course_list)
							 {
										?> 
					      <option><?php echo  $course_list['language_name']; ?></option>
					      <?php } ?>
					    </select>
					  </div>
					   
					    <div class="float-left">
					    <button type="submit" class="btn btn-warning" name="btn-delete-course"><b style="color: white;">Submit</b></button>
						</div>
				  </form>

				</div>
			</div>


            </div>          
          </div>



        </div>			
      







  				
  			</div></center>


  </div>



  



  <div class="tab-pane container fade" id="menu2">   


kjfdfbbhfbf

  </div>
  					
</div>















  		
  			
  		</div>



</div>
</div>











<script type="text/javascript">
	

	$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
});

	function validation()
	{
		var name=document.getElementById('c_name').value;
		var desc=document.getElementById('c_desc').value;
		var img=document.getElementById('c_img').value;
		if (name=="")
		{ 
			document.getElementById('name_error').innerHTML="** please enter the course name";
			return false;

		}

		if (desc=="")
		{ 
			document.getElementById('desc_error').innerHTML="** please enter the course descsription";
			return false;

		}
		if (img=="")
		{ 
			document.getElementById('image_error').innerHTML="** please choose an image";
			return false;

		}
	}
					

    	function display_modal()
    	{

    		

    	}




    				


    	 $(window).on('load',function(){
        $('#myModal').modal('show');
    });


    	 	      

</script>


 </body>
 </html>