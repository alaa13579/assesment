
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

  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top" >
  <a class="navbar-brand text-white" href="#"><h1><b style="margin: 300%;">Education Centre</b></h1></a>
  <button type="btn btn-outline-success" class="btn btn-dark float-right" style="height: 50px;width:150px; margin-left:1000px"><a href="../login.php" class="text-white "><h5><b>Logout</b></h5></a> </button>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
   
  </div>
</nav>
    <div class="container-fluid" style="margin-top: 50px;" >
      <div class="row">
        <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar" >
         <ul class="list-group text-white sidebar-list">
         <li class="list-group-item bg-white" style="height: 30px;"></li>
            <li class="list-group-item  bg-dark "><a href="admin_main.php"><h1><b>Admin</b></h1> </a></li>
            <li class="list-group-item bg-white" style="height: 30px;"></li>
            <li class="list-group-item bg-warning "><a href="manage_courses/manage_courses.php"><h2><b>Manage Courses</b></h2></a></li>
            <li class="list-group-item bg-white" style="height: 30px;"></li>
            <li class="list-group-item bg-dark"><a href="manage_quiz/manage_quiz.php"><h2><b>Manage Quiz</b></h2></a></li>
            <li class="list-group-item bg-white" style="height: 30px;"></li>
       
            <li class="list-group-item bg-dark"><a href="../login.php"><h2><b>Logout</b></h2></a></li>
            <li class="list-group-item bg-white" style="height: 300px;"></li>
          </ul>
        </div>

        <div class=" col-md-10">
               <div class="card-header bg-white" style="margin-right: -45px; height: 60px;">
                 
                  </div>
                 <div class="row">

     
         

          <div class="col-md-4 mt-3 ml-5">
            <div class="card shadow " style="width: 50rem;height: 420px; box-shadow: 1px 1px 1px 1px #e1dbdb; border-radius:0px; border-top-left-radius: 0px; cursor:pointer; margin-left:1px">
           


              <img class="myimg" src="../uploadimg/file3.png" alt="Card" width="500" height="300">
              <div class="card-body">
                <p class="card-text"><a href="manage_courses/manage_courses.php" style="text-decoration: none;"><h2 style="padding-top:50px;"><b>MANAGE YOUR COURSE <i class="fa fa-book ml-3"></i></b></h2></a></p>
              </div>
            </div>
            
          </div>


           <div class="col-md-4 mt-3">
            <div class="card shadow" style="width: 50rem;height: 420px;cursor:pointer; box-shadow:1px 1px 1px 1px #e1dbdb; border-radius:0px; border-top-left-radius: 0px; margin-left:200px">
            
              <img class="" src="../uploadimg/file6.png" alt="Card" width="500" height="400">
              <div class="card-body">
                <p class="card-text "><a href="manage_quiz/manage_quiz.php" style="text-decoration: none; color: orangered"><h2 style="margin: 10px;padding-top:50px"><b>MANAGE YOUR QUIZ <i class="fa fa-book ml-3"></i></b></h2></a></p>
              </div>
            </div>
            
          </div>

          <div class="col-sm-3 mt-3">


            <table class="table table-borderless">
   
    <tbody >

      <tr>
        <td class="mytable2">
           

        </td>
       
      </tr>
     
    </tbody>
  </table>
           
            
          </div>       


            </div>


      </div>      
    </div>          

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    
    <script src="../../assets/js/vendor/holder.min.js"></script>
   
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>





    
  </body>
</html>
