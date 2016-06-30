
<?php
     include "crowd_source_class.php";
	 
	 //admin object intantiation
	 $adminObjt = new Crowd_sourceClass(); 

	//get the action
	if(isset($_POST['action']) ){
		$action = $_POST['action'];
		
		             //test the action
		                 switch ($action) {
							 case "ckeckIfCowdSourceExist":
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
							
							  
							default:
									$response['response'] = "bull shit";
							        echo json_encode($response);
							} 
		
	}
	
	

		
		
?>