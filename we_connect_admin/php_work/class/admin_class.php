<?php

   include "connect.php";
   
 
   //creating admin class
   class admin
   
  {
	  
	  //declaring properties and assigning default values
	  public $admin_email = "trini@gmail.com";
	  public $admin_id = 0;
	  public $admin_Fname ='';
	  public $admin_Lname ='';
	  public $admin_Surname ='';
	  public $admin_status = 0;
	  public $admin_emp_no = 0000;
	  public $admin_date_reg =0;
	  public $admin_last_log_on =0;
	  
	  
	  
	public function check_email_Exist($admin_email){
		
		//remove space and anything that isn't a digit
		$checkAdminEmailQuery = mysql_query("SELECT * FROM admin WHERE admin_email ='$admin_email'");
		$checkAdminEmailQueryNumRow = mysql_num_rows($checkAdminEmailQuery);
		
           if ($checkAdminEmailQueryNumRow !=0){	     				  
	             return true;
           }else{
				 return false;
		   }	
	}
	
	 public function insertAdmin($admin_email, $admin_emp_no, $admin_employee_clearance_level,$currentDate){
		    $randPassword = substr(md5(microtime()),rand(0,26),8);
			
		    $insert_crowd_SQuery = mysql_query("INSERT INTO admin (admin_email, admin_emp_no,admin_level,admin_date_reg,admin_password) VALUES ('$admin_email',$admin_emp_no, '$admin_employee_clearance_level','$currentDate','$randPassword')");
			  	
		      //check first if the query went through
				if ( $insert_crowd_SQuery == true){
					 return $randPassword;
				}else{
					return false;
				}
	
	}
	
	
	public function check_admin_Exist($admin_email,$admin_emp_no){
		
		//remove space and anything that isn't a digit
		$checkAdminEmailQuery = mysql_query("SELECT * FROM admin WHERE admin_email ='$admin_email' and admin_emp_no= $admin_emp_no");
		$checkAdminEmailQueryNumRow = mysql_num_rows($checkAdminEmailQuery);
		
           if ($checkAdminEmailQueryNumRow !=0){
 
	             return true;
           }else{
				 return false;
		   }	
	}
	public function loginAdmin($admin_email , $admin_password){
		
		//remove space and anything that isn't a digit
		$loginCredentialsQuery = mysql_query("SELECT * FROM admin WHERE admin_email ='$admin_email' and admin_password ='$admin_password'");
		$loginCredentialsQueryNumRow = mysql_num_rows($loginCredentialsQuery);
		
           if ($loginCredentialsQueryNumRow !=0){	     				  
				 
				  return true;
           }else{
				 return false;
		   }	
	}
	
	
	public function retrieve_all_admin(){
		
		$allAdminQuery = mysql_query("SELECT * FROM admin");
		$allAdminQueryNumRow = mysql_num_rows($allAdminQuery);
		
		   $this->res = mysql_query("select * from admin");
				if(mysql_num_rows($this->res)){
					while($this->row = mysql_fetch_assoc($this->res)){
						$record = array_map('stripslashes', $this->row);
						$this->records[] = $record; 
					}
					return $this->records;
				}
	}
	
	public function retrieve_specific_admin($admin_id){
		
		$specificAdminQuery = mysql_query("SELECT * FROM admin WHERE admin_id=$admin_id");
		$specificAdminQueryyNumRow = mysql_num_rows($specificAdminQuery);
		
	     if ($specificAdminQueryyNumRow != 0){
			 while($row = mysql_fetch_assoc($specificAdminQuery)){
				   $response['admin_Fname'] = $row['admin_Fname'];
				   $response['admin_Lname'] = $row['admin_Lname'];
				   $response['admin_Surname'] = $row['admin_Surname'];
				   $response['admin_status'] = $row['admin_status'];
				   $response['admin_email'] = $row['admin_email'];
				   $response['admin_emp_no'] = $row['admin_emp_no'];
				   $response['admin_date_reg'] = $row['admin_date_reg'];
				   $response['admin_last_log_on'] = $row['admin_last_log_on'];
				   $response['admin_level'] = $row['admin_level'];
				   $response['admin_failed_log'] = $row['admin_failed_log'];
				   $response['admin_role'] = $row['admin_role'];
			        
			 }
			  return $response; 
		 }else{
			 return false;
		 }
	}
	
	
  }
  
  
?>