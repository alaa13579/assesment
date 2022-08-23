<?php 

include("includes/bootstrap_cdn_inc.php");
include("class/users.php");
$res=new users;

$answers=$res->show_result($_POST);    
 ?>


<div class="container mt-5">
	<center><div class="col-md-6">
 
 <?php 
 		$total_ques=$answers['right']+$answers['wrong']+$answers['not_attempted'];
 		$attempted_ques=$total_ques-$answers['not_attempted'];
 		$percentage=($answers['right']*100)/$total_ques;
 		$message="";
 		if ($percentage<=100 and $percentage>=70) 
 		{
 			$message="Congratulation you have scored : ";
 		}
 		elseif ($percentage<=69 and $percentage>=50) 
 		{
 			$message="You can do better, try again. you scored : ";
 		}
 		else
 		{
 			$message="Sorry you are failed, try again you scored : ";
 		}



  ?>
<h2>Your Quiz Result</h2><br>
 <table class="table table-bordered table-active">
 	
  <thead>
    <tr>
      <th scope="col">Total No.of questions</th>
      <th scope="col"><?php echo $total_ques; ?></th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Attempted Questions</th>
      <td><?php echo $attempted_ques; ?></td>
     
    </tr>
    <tr>
      <th scope="row">Right Questions</th>
      <td> <?php echo $answers['right'];?></td>
      
    </tr>
    <tr>
      <th scope="row">Wrong Answers</th>
      <td><?php echo $answers['wrong'];?></td>
  
    </tr>

      <tr>
      <th scope="row">Not Attempted</th>
      <td><?php echo $answers['not_attempted'];?></td>
  
    </tr>
  </tbody>

 

</table>
 <div class="card-header mt-5 bg-warning text-light">
  	<?php echo $message; ?> <b><?php echo $percentage.' %'; ?></b>
  </div>

  <button type="button" class="btn btn-warning mt-3"><a href="quizhome.php" style="text-decoration: none; color: white;"><b>Back</b></a></button>
 

</div></center>
</div>