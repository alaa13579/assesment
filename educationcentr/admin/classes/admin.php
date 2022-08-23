<?php 



 class admin
 {


 	public $host="localhost";
 	public $username="root";
 	public $pass="";
 	public $db_name="educationcentre";
 	public $conn;
 	public $user_details;
 	public $course_count=0;
 	public $video_count=0;
 	public $faq_list;

 	public function __construct()
 	{
 		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
 		if ($this->conn->connect_errno)
 		 {
 			die("connection failed");
 		}
 	}

 	public function show_users()    
 	{
 		$query="select * from login";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			$this->user_details[]=$row;
 		}
 		return $this->user_details;
 	}
 	


 	public function display_course_count()           
 	{
 		$query="select * from programming_languages";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			
 			$this->course_count++;
 		}
 		
 		print_r($this->course_count);

 	}


	public function display_faq_list()
	{
		$query="select * from faq";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			
 			$this->faq_list[]=$row;
 		}
 		
 		return ($this->faq_list);

	}





	public function getData($sql)
	{	

		$conn = @new mysqli($this->servername,$this->username,$this->password,$this->dbname);		

	
		if ($conn->connect_error) {
		  
		   throw new Exception("");
		}
		else{
	
            $result =$conn->query($sql);
            if(!$result)
            {
                
                
                throw new Exception("");
				}
				else{					
					
					$rows = array();
				
					if($result->num_rows > 0) {
					
						while($row = mysqli_fetch_assoc($result)) {
							
							$rows[] = $row;
						}
						
						return $rows;
					}
							
				}
				
		}
   
	}


	function ExecuteQuery($sql)
	{
		$conn = @new mysqli($this->servername,$this->username,$this->password,$this->dbname);
	
		
		if ($conn->connect_error) {
		   
		   throw new Exception("");
		}
		else{
			$result =$conn->query($sql);
	
			if(!$result){
   			   
				throw new Exception("");
			
			}else
				return  $conn->insert_id; 
		}
   
	}





}
 ?>