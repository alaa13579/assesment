<?php

require_once('admin.php');

class users{
	

	public function GetAllUsers ()
	{
		
		$sql="Select * from login ORDER BY user_id ASC";
		
		
				
		$db = new DAL();
		
		
		$rows=$db->getData($sql);
		
		return $rows;
	}
	
	
	public function deleteUserById($id)
	{
		$sql="delete from login where user_id=$id";

		$db = new DAL();
		
		
		$rows=$db->getData($sql);
		
		return $rows;
	}
	
	
	public function addUser($username,$password,$email)
	{
		$sql="INSERT INTO login (username, password, email) VALUES ('$username', '$password', '$email')";
	
		$db = new DAL();

		$rows = $db->ExecuteQuery($sql);
		return $rows;

	}
	
	
	public function updateUser($id,$username,$password,$email)
	{
		$sql="UPDATE users SET username = '$username', password = '$password', email = '$email'
		 WHERE id = $id";

       $db = new DAL();

    $rows = $db->ExecuteQuery($sql);
    return $rows;
	}
	
	
	public function editUser($id)
	{
		$sql="SELECT * from login where id=$id";

		$db = new DAL();
		
		
		$rows=$db->getData($sql);
		
		return $rows;
	}



	public function searchUsers ($name)
	{
		
		$sql="Select * from login WHERE username='$username'";
		
		
				
		$db = new DAL();
		
		
		$rows=$db->getData($sql);
		
		return $rows;
	}
}

?>