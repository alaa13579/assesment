<?php 

include 'classes/manage_quiz_class.php';

	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'educationcentre');
	if (!$con)
	 {
		die('unable to coonect to database');
	 }






 if (isset($_POST['adduser']))
 {
 

$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$query=mysql_query("insert into login (id,username,password,email) value('$id','$username','$password','$email')"); 
 }



 








 ?>