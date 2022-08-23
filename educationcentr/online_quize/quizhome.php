<?php 
  
include("class/users.php");        
$profile=new users;                
extract($_POST);


 ?>


<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
</head>

<style type="text/css">
  .li1{
     float: right !important;
  }
 



</style>


<body >







  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top position-relative">  
  <a class="navbar-brand text-white" href="../index.php"><b style="margin: 600px;">Education Centre</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
     
   
      <li class="nav-item dropdown">
       
        </div>
      </li>
      
    </ul>
   
  </div>
</nav>

       

 
  
    

  

   <div class="tab-content">
     <div class="tab-pane active " id="menu1" >
    
     <center><button type="button" class="btn btn-warning mt-5" href="#myid" data-toggle="collapse"><b style="color: white;">Start Quiz</b></button></center>

     

     <center><div class="col-sm-6 mt-3">
       <div class="collapse" id="myid">
      <div class="form-group">
    <label><h3>select Course</h3></label>
    <form method="POST" action="question_show.php">
    <select class="form-control" id="exampleFormControlSelect1" name="selected_course">

      <?php 
       $profile->show_courses();                                 
       foreach ($profile->cat_data as $key => $course) 
       {
         
 ?>

      <option value="<?php echo $course['id'] ;?>"><?php echo $course['cat_name']; ?></option>    
    

      <?php
}

      ?>
    </select>
      <button type="submit" class="btn btn-warning mt-3"><b style="color: white;">Start Quiz</b></button>
  </form>
  </div>
</div>
</div>
</center>

 


      </div>
      <div class="tab-pane fade" id="menu2">  

        <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
     <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>

    <?php 

    foreach($profile->data as $key => $prof) 
    {
      
   ?>
    <tr >
      <th scope="row"><?php echo $prof['id']; ?></th>
      <td><?php echo $prof['name']; ?></td>
      <td><?php echo $prof['email']; ?></td>
	  <td><img src="img/<?php echo $prof['img']; ?>" class="img-fluid" width="35px" height="30px"></td>
      
    </tr>
   
  </tbody>
<?php } ?>
</table>


       </div>
       <div class="tab-pane fade" id="menu3">this is menu 3</div>
       
     
   </div>
              
  </div>            

</body>
</html>






