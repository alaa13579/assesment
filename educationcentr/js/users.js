$(document).ready(function(){



GetAllUsers();

$("#search").click(function(){
	
	var username = $("#txtSearch").val();

	searchUsers(username);
	if(username==''){

GetAllUsers();



	}
});


function GetAllUsers()
{		
	
	var op = 1 ;   
	$.ajax({
		  type: 'GET',
		  url:"http://localhost/educationcentr/ws_users.php",
		  data: ({name:name,op:op}),
		  
		  dataType: 'json',
		  timeout: 5000,
		  success: function(data, textStatus, xhr) 
		  {				  
			   
			  if(data==-1)
				  alert("Data couldn't be loaded!");
			  else{
				  
				  data = JSON.parse(xhr.responseText);					
				parseUsers(data);
			  }
		  },
		  error: function(xhr, status, errorThrown) 
		  {
						   
			  alert(status + errorThrown);				  
		  }
	  });  	

}

function parseUsers(data)
{
	$("#tusers").empty();
	
	 $.each(data, function(index, row) {			   
						
		  item="<tr id='"+row.user_id+"'>";
		  item+="<td>"+row.username+"</td>";
		  item+="<td>"+row.password+"</td>";
		  item+="<td>"+row.email+"</td>";
		  item+="<td><button type='button' style='background-color:#FFCC00 ; color:white; border:none; font-size:25px; border:none; border-radius: 10px; ' id='edi_"+row.user_id+"' class='edi' data-bs-toggle='modal' data-bs-target='#exampleModal'><i class='fas fa-user-edit'></i></button></td>";
		  item+="<td><button type='button' style='background-color:#585656 ; color:white;  font-size:25px; border:none; border-radius: 10px; '  id='del_"+row.user_id+"' class='del' ><i class='fas fa-user-slash'></i></button></td>";

		  item+="</tr>";
		  item+="</tr>";

						
						 
		 $("#tusers").append(item);			   			   
		   
		   
		});			
}

	


function addUsers(username,password,email)
{		
	
	var op = 2 ;   
	$.ajax({
		  type: 'GET',
		  url:"http://localhost/educationcentr/ws_users.php",
		  data: ({username:username,password:password,email:email,op:op}),
		  
		  dataType: 'json',
		  timeout: 5000,
		  success: function(data, textStatus, xhr) 
		  {				  
			   
			  if(data==-1)
				  alert("Data couldn't be loaded!");
			  else{
				  
				  data = JSON.parse(xhr.responseText);					
				
			  }
		  },
		  error: function(xhr, status, errorThrown) 
		  {
						   
			  alert(status + errorThrown);				  
		  }
	  });  	

}


	$(document).on('click', '#addusers', function () {

	
	var username = $("#username").val();
	var password = $("#password").val();
	var email = $("#email").val();

	addUsers(username,password,email);
	location.reload();
	$("#myModal").modal('toggle');



});


	function deleteusers(id)
	{		
	
	var op = 4 ;   
	$.ajax({
		  type: 'GET',
		  url:"http://localhost/educationcentr/ws_users.php",
		  data: ({id:id,op:op}),
		  
		  dataType: 'json',
		  timeout: 5000,
		  success: function(data, textStatus, xhr) {
			$('#' + id).hide();

	}
		  
 });  	

}


	$(document).on('click', '.del', function () {

	var id= $(this).attr("id");
	id=id.substring(4);
	
	deleteusers(id);
location.reload();
		});



		$(document).on('click', '#add', function () {

		$("#upd").hide();
		$("#addusers").show();
	
			});


			$(document).on('click', '.edi', function () {
				$("#addusers").hide();
				$("#upd").show();


				var id= $(this).attr("id");
				id=id.substring(4);
				edituser(id);

					
					});



	function edituser(id)
			{		
				
	var op = 5 ;   
	$.ajax({
		type: 'GET',
		url:"http://localhost/educationcentr/ws_users.php",
		data: ({id:id,op:op}),
		
		dataType: 'json',
		timeout: 5000,
		success: function(data, textStatus, xhr) {
			parseEdit(data);

	}
		
	});  	

}

	function parseEdit(data)
	{
		
		
			$.each(data, function(index, row) {			   
			var id = row.user_id;
			var username = row.username;
			var password = row.password;
			var email = row.email;

			$("#id").val(id);
				
				$("#username").val(username);
			$("#password").val(password);
			$("#email").val(email);
	
			});			
	}
	
	$("#exampleModal").on('hidden.bs.modal', function () {
		$(this).find("form").trigger('reset');
	});
	$("#exampleModal").on('submit', function () {
		return false;
	});





	function updateUsers(id,username,password,email)
   {		
	var op = 3 ;   
	$.ajax({
		  type: 'GET',
		  url:"http://localhost/educationcentr/ws_users.php",
		  data: ({id:id,username:username,password:password,email:email,op:op}),
		  
		  dataType: 'json',
		  timeout: 5000,
		  success: function(data, textStatus, xhr) 
		  {				  
			   
			  if(data==-1)
				  alert("Data couldn't be loaded!");
			  else{
				  
				  data = JSON.parse(xhr.responseText);					
				
			  }
		  },
		  error: function(xhr, status, errorThrown) 
		  {
						   
			  alert(status + errorThrown);				  
		  }
	  });  	

}


		$(document).on('click', '#upd', function () {
		var id = $("#id").val();
		
		var username = $("#username").val();
		var password = $("#password").val();
		var email = $("#email").val();

		updateUsers(id,username,password,email);
		location.reload();
		$("#myModal").modal('toggle');

		});



		function searchUsers(name)
		{		
			
			var op = 6 ;   
			$.ajax({
				type: 'GET',
				url:"http://localhost/educationcentr/ws_users.php",
				data: ({username:username,op:op}),
				
				dataType: 'json',
				timeout: 5000,
				success: function(data, textStatus, xhr) 
				{				  
					
					if(data==-1)
						alert("Data couldn't be loaded!");
					else{
						
						data = JSON.parse(xhr.responseText);					
						parseUsers(data);
					}
				},
				error: function(xhr, status, errorThrown) 
				{
								
					alert(status + errorThrown);				  
				}
			});  	

		}



		});






   
    



	
	
	
	

