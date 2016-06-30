
<?php
     include "admin_class.php";
	 
	 //admin object intantiation
	 $adminObjt = new admin(); 
     $currentDate = date("y/m/d");
	//get the action
	if(isset($_POST['action']) ){
		$action = $_POST['action'];
		
		             //test the action
		                 switch ($action) {
							 case "ckeckIfRegemailExist":
							         if(isset($_POST['email'])) {
										 $adminEmail = $_POST['email'];
										 $adminEmail = trim($adminEmail); 
											 if ($adminObjt->check_admin_Exist($adminEmail) === true){
														 $response['response'] =  "emai_exist" ;
														 echo json_encode($response);
											}else{
														 $response['response'] =  "email_not_exist" ;
														 echo json_encode($response);
											}					 
									 }
							             
								   break;
							case "get_admin_info":
							               if(isset($_POST['param'])) {
											     $adminId = $_POST['param'];
												 $adminId = trim($adminId);
												 
											
												     $response['response'] =  "get_admin_info ok" ;
													 echo json_encode($response);
										   }
							            
								   break;
							case "deactivate":
							               
							                         $response['response'] =  "deactivate ok" ;
													 echo json_encode($response);
								   break;
								   
								   
							case "loginAdmin":
							         if(isset($_POST['login_param'])) {
										$params = $_POST['login_param'];
										$paramsArr = explode(",",$params);
										 
											   if (is_array($paramsArr)){
														 $admin_email= trim($paramsArr[0]);
														 $admin_password = trim($paramsArr[1]);
														
														
														if ($adminObjt->loginAdmin($admin_email,$admin_password) === true){
															
															$response['response'] =  "loggged_in" ;
													        echo json_encode($response);
														}else{
															$response['response'] =  "login_error" ;
													        echo json_encode($response);
														}			
											   }else{
													 $response['response'] =  "not_array" ;
													 echo json_encode($response);
											   }
										 
									 }
							             
								   break;
						    case "registerAdmin":
							         if(isset($_POST['registration_param'])) {
										$params = $_POST['registration_param'];
										$paramsArr = explode(",",$params);
										
										        if (is_array($paramsArr)){
														 $admin_email = $paramsArr[0];
														 $adminEmployeeNumber = $paramsArr[1];
														 $adminEmployeeClearanceLevel = $paramsArr[2];
														 
														 $admin_email = trim($admin_email);
														 $adminEmployeeNumber = trim($adminEmployeeNumber);
														 $adminEmployeeClearanceLevel = trim($adminEmployeeClearanceLevel);
														 
														 if ($adminObjt->check_admin_Exist($admin_email,$adminEmployeeNumber) == true){
														     $response['response'] =  "admin_exist" ;
													         echo json_encode($response);
											            }else{
															     if ($adminObjt->insertAdmin($admin_email,$adminEmployeeNumber,$adminEmployeeClearanceLevel,$currentDate) == false){
																	 $response['response'] =  "admin_not_inserted" ;
														                echo json_encode($response);
														                
											                    }else{
																	    $userPassword = $adminObjt->insertAdmin($admin_email,$adminEmployeeNumber,$adminEmployeeClearanceLevel,$currentDate);
																		
															            $response['response'] = $userPassword ;
													                    echo json_encode($response);
											                    }
															
											             }
										                 
													 
													 
										          }else{
													 $response['response'] =  "not array" ;
													 echo json_encode($response);
											   }
									 }
							             
								   break;
							  
							default:
									$response['response'] = "bull shit";
							        echo json_encode($response);
							} 
		
	}
	
	

		
		
?>