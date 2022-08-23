<?php
require_once('users.class.php');

$op = $_GET["op"];

switch($op)
 {

case 1:
    {
 $us = new users();
  
   $result=$us->GetAllUsers();
break;


}
  case 2:
     {
    
    $username=$_GET["username"];
    $password=$_GET["password"];
    $email=$_GET["email"];
     
    $us = new users();
    $result=$us->addUser($username,$password,$email);
    break;
     }
    case 3:
        {
     $id=$_GET["id"];
     $username=$_GET["username"];
     $password=$_GET["password"];
     $ustatus=$_GET["email"];
     
     $us = new users();

     $result=$us->updateUser($id,$username,$password,$email);
     break;

        }
     case 4:
        {
        $id=$_GET["id"];
        
        $us = new users();

        $result=$us->deleteUserById($id);
        break;
    }
    case 5:
      {

         $id=$_GET["id"];
        
         $us = new users();
 
         $result=$us->editUser($id);
         break;

      }

      case 6:
         {
      $us = new users();
      $username = "";
     
      if (isset($_GET["name"]))
        {
         $username=$_GET["username"];
     
        }
        
        $result=$us->searchUsers($name);
     break;
     
     
     }
 }
 header("Content-type:application/json");
 echo json_encode($result);


?>