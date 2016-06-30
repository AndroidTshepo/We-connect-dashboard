<?php


 include "connect.php";
 
 
 
   //creating admin class
   class usersClass
    {
		  
		  public function retrieve_all_users(){
				$allUsersQuery = mysql_query("SELECT * FROM user_tbl");
				$allUsersQueryNumRow = mysql_num_rows($allUsersQuery);
				   if ($allUsersQueryNumRow != 0){
						  while($allUsersRow = @mysql_fetch_assoc($allUsersQuery)){
								 $allUsersRowObject [] = $allUsersRow;
						  }
						  $success['success'] = "success";
						  //print_r(json_encode($crowd_s_Object));
						  return $allUsersRowObject;
				   }else{
						  $error['error'] = "No record Found";
						  return json_encode($error); 
				   }	
	      }  
	}
	  
	  
?>