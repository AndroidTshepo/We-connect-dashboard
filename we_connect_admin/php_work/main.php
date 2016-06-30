
<?php
     include "class/crowd_source_class.php";
	 include "class/question_class.php";
	 include "class/option_class.php";
	 include "class/user_class.php";
	 $crowdSourceID = 0;
	 $crowdObjt = new Crowd_sourceClass(); 
	 $currentDate = date("y/m/d");
	  
     //Function to check if directory is empty	  
	 function is_dir_empty($dir) {
         if (!is_readable($dir)) return NULL; 
           return (count(scandir($dir)) == 2);
     }
	 
	 function deleteDirectory($target_dir) {
				if (!file_exists($target_dir)) {
					return true;
				}
				if (!is_dir($target_dir)) {
					return unlink($target_dir);
				}
				foreach (scandir($target_dir) as $item) {
					if ($item == '.' || $item == '..') {
						continue;
					}
					if (!deleteDirectory($target_dir . DIRECTORY_SEPARATOR . $item)) {
						return false;
					}
				}
				return rmdir($target_dir);
		 }
	 
	if(isset($_POST['action']) ){
		$action = $_POST['action'];
		
		                 switch ($action) {
							 case "delete":
							         $error['error'] =  "delete ok" ;
										 echo json_encode($error);
								   break;
						     
							 case "activate":
							         if(isset($_POST['admin_id'])) {
										 $crowd_s_id = $_POST['admin_id'];    
   									   if ($crowdObjt->crowd_source_activate($crowd_s_id) == true){
								                     $error['error'] =  "actve ok" ;
													 echo json_encode($error);
										}else{
											         $error['error'] =  "actve no" ;
													 echo json_encode($error);
										}
									 }
								   break;
								   
							 case "col_update":
						           if(isset($_POST['param'])){
										 $params = $_POST['param'];
										 $paramsArr = explode(",",$params);
											   if (is_array($paramsArr)){
														 $crowd_s_id= $paramsArr[0];
														 $crowd_s_column = $paramsArr[1];
														 $crowd_s_new_val = $paramsArr[2];
														 
														if ($crowdObjt->crowd_source_edit_selected_col($crowd_s_id,$crowd_s_column,$crowd_s_new_val) == true){
															$error['error'] =  $paramsArr ;
													        echo json_encode($error);
														}else{
															$error['error'] =  "Shitttt" ;
													        echo json_encode($error);
														}					
											   }else{
													 $error['error'] =  "not array" ;
													 echo json_encode($error);
											   }
								   }
			                         break;
								case "checkCrowdSourceExist":
								     if(isset($_POST['param'])) {
										 $crowd_source_name= $_POST['param'];
										 $crowd_source_name = trim($crowd_source_name);
										 
										 if ($crowdObjt->check_if_crowd_source_exist($crowd_source_name) == true){
															$response['response'] =  "crowd_source_exist" ;
													        echo json_encode($response);
														}else{
															$response['response'] =  "crowd_source_not_exist" ;
													        echo json_encode($response);
														}             
									}
								    break;
								case "registerCrowdSource":
								     if(isset($_POST['param'])){
										 $params = $_POST['param'];
										 $paramsArr = explode(",",$params);
											   if (is_array($paramsArr)){
														 $crowd_source_name= $paramsArr[0];
														 $crowd_source_descrition = $paramsArr[1];
														 
														 $crowd_source_name = trim($crowd_source_name);
														 $crowd_source_descrition = trim($crowd_source_descrition);
														 
													    if ($crowdObjt->check_if_crowd_source_exist($crowd_source_name) == false){
														    if($crowdObjt->insert_crowd_source($crowd_source_name,$crowd_source_descrition) == true){
															          $response['response'] =  "crowd_source_inserted";
													                  echo json_encode($response);	
															}else{
																      $response['response'] =  "crowd_source_not_inserted";
													                  echo json_encode($response);
															}
														}else{
															$response['response'] =  "crowd_source_exist";
													        echo json_encode($response);
														}				
											   }else{
													 $response['response'] =  "not array" ;
													 echo json_encode($response);
											   }
								   }   
								      break;
								case "updateCrowdSoureNameAndDescription":
								     if(isset($_POST['param'])){
										 $params = $_POST['param'];
										 $paramsArr = explode(",",$params);
											   if (is_array($paramsArr)){
														 $new_crowd_source_name= $paramsArr[0];
														 $new_crowd_source_descrition = $paramsArr[1];
														 $old_crowd_source_name = $paramsArr[2];
														 
														 $new_crowd_source_name = trim($new_crowd_source_name);
														 $new_crowd_source_descrition = trim($new_crowd_source_descrition);
														 $old_crowd_source_name = trim($old_crowd_source_name);
                                                          if($crowdObjt->updateCrowdSourceNameAndDescription($new_crowd_source_name,$new_crowd_source_descrition,$old_crowd_source_name) == true){
															          $response['response'] =  "crowd_source_all_updated" ;
													                  echo json_encode($response);	
															}else{
																      $response['response'] =  "crowd_source_nothing_updated";
													                  echo json_encode($response);
															}				
											   }else{
													 $response['response'] =  "not array" ;
													 echo json_encode($response);
											   }
								   }
								    break;
								case "updateCrowdSoureDescription":
								     if(isset($_POST['param'])){
										 $params = $_POST['param'];
										 $paramsArr = explode(",",$params);
											   if (is_array($paramsArr)){
														 $new_crowd_source_descrition = $paramsArr[0];
														 $old_crowd_source_name = $paramsArr[1];
														 
														 $new_crowd_source_descrition = trim($new_crowd_source_descrition);
														 $old_crowd_source_name = trim($old_crowd_source_name);
                                                          if($crowdObjt->updateCrowdSourceDescription($new_crowd_source_descrition,$old_crowd_source_name) == true){
															          $response['response'] =  "crowd_source_description_updated" ;
													                  echo json_encode($response);	
															}else{
																      $response['response'] =  "crowd_source_description_not_updated";
													                  echo json_encode($response);
															}						
											   }else{
													 $response['response'] =  "not array" ;
													 echo json_encode($response);
											   }
								   }
								break;
								case "updateCrowdSoureName":
								     if(isset($_POST['param'])){
										 $params = $_POST['param'];
										 $paramsArr = explode(",",$params);
											   if (is_array($paramsArr)){
														 $new_crowd_source_name = $paramsArr[0];
														 $old_crowd_source_name = $paramsArr[1];
														 
														 $new_crowd_source_name = trim($new_crowd_source_name);
														 $old_crowd_source_name = trim($old_crowd_source_name);
                                                          if($crowdObjt->updateCrowdSourceName($new_crowd_source_name,$old_crowd_source_name) == true){
															          $response['response'] =  "crowd_source_name_updated" ;
													                  echo json_encode($response);	
															}else{
																      $response['response'] =  "crowd_source_name_not_updated";
													                  echo json_encode($response);
															}					
											   }else{
													 $response['response'] =  "not array" ;
													 echo json_encode($response);
											   }
								   }
								break;
								case "checkIfQuestionExist":
								     if(isset($_POST['param'])){
										 $params = $_POST['param'];
										 $paramsArr = explode(",",$params);
									      if (is_array($paramsArr)){
														 $questionDescription = $paramsArr[0];
														 $questionType = $paramsArr[1];
														 $crowd_source_name = $paramsArr[2];
														 
														 $questionDescription = trim($questionDescription);
														 $questionType = trim($questionType);
														 $crowd_source_name = trim($crowd_source_name);
														 
														 $questionObjt = new questionClass($questionDescription,$questionType,$currentDate);
														 
														 if($crowdObjt->getCrowdSourceId($crowd_source_name) !=0)  {
															 $crowdSourceID = $crowdObjt->getCrowdSourceId($crowd_source_name);
															 if($crowdObjt->getCrowdSourceQuestionIds($crowdSourceID) != 0){
																          $questionObjt = new questionClass($questionDescription,$questionType,$currentDate);
																          $crowdSourceQuestionIds = $crowdObjt->getCrowdSourceQuestionIds($crowdSourceID);
																		  $questionExistStatus= $questionObjt->questionExist($crowdSourceQuestionIds, $questionDescription);
																		  if ($questionExistStatus == true){ 
																			   $response['response'] = "question_exist";
																			   echo json_encode($response);
																		  }else{
																			   $response['response'] = "question_not_exist" ;
																			   echo json_encode($response);
																		  }
														     }else{
																          $response['response'] =  "question_does_not_exist_for_crowd_source" ;
																		  echo json_encode($response);
															 }	
														 }else{
															              $response['response'] =  "no_crowd_source_found" ;
																		  echo json_encode($response);
														 }														 
										  }
									 }
								   break;
								   case "registerQuestion":
								     if(isset($_POST['param'])){
										 $params = $_POST['param'];
										 $paramsArr = explode(",",$params);
									      if (is_array($paramsArr)){
											             $questionDescription = $paramsArr[0];
														 $questionType = $paramsArr[1];
														 $crowd_source_name = $paramsArr[2];
														 $questionNumber = $paramsArr[3];
														 
														 $questionDescription = trim($questionDescription);
														 $questionType = trim($questionType);
														 $questionNumber = trim($questionNumber);
														 
														  if($questionType == 'multileChoiceQuestOne'  || $questionType == 'multileChoiceQuestMutiple' ){
																  if($crowdObjt->getCrowdSourceId($crowd_source_name) !=0)  {
																	 $crowdSourceID = $crowdObjt->getCrowdSourceId($crowd_source_name);
																	 if($crowdObjt->getCrowdSourceQuestionIds($crowdSourceID) != 0){
																			   $questionObjt = new questionClass($questionDescription,$questionType,$currentDate);
																			   $crowdSourceQuestionIds = $crowdObjt->getCrowdSourceQuestionIds($crowdSourceID);
																			   $questionExistStatus= $questionObjt->questionExist($crowdSourceQuestionIds, $questionDescription);
																				  if ($questionExistStatus == true){
																					   $response['response'] = "question_exist" ;
																					  echo json_encode($response);
																				  }else{
																					  $questionObjt->insertCrowdSourceAndQuestion($questionDescription, $questionType,$currentDate,$crowdSourceID);
																					   $response['response'] = "question_inserted" ;
																					  echo json_encode($response);
																				  }			  
																	 }else{
																				   $questionObjt = new questionClass($questionDescription,$questionType,$currentDate);
																				  //insert questions
																				  
																				  $questions =[1,2,3];
																				  $tryin = $questionObjt->insertCrowdSourceAndQuestion($questionDescription,$questionType,$currentDate,$crowdSourceID);
																				  $response['response'] =  "question_inserted"  ;
																				  echo json_encode($response);
																	 }	
																 }else{
																				  $response['response'] =  "no_crowd_source_found" ;
																				  echo json_encode($response);
																 }	
														 }else if($questionType == 'rate_question_text'){
														         if($crowdObjt->getCrowdSourceId($crowd_source_name) !=0)  {
																	 $crowdSourceID = $crowdObjt->getCrowdSourceId($crowd_source_name);
																	 $optionObjt = new optionClass("5",$currentDate);
																	 if($crowdObjt->getCrowdSourceQuestionIds($crowdSourceID) != 0){
																			   $questionObjt = new questionClass($questionDescription,$questionType,$currentDate);
																			   $crowdSourceQuestionIds = $crowdObjt->getCrowdSourceQuestionIds($crowdSourceID);
																			   $questionExistStatus= $questionObjt->questionExist($crowdSourceQuestionIds, $questionDescription);
																				  if ($questionExistStatus == true){
																					   $response['response'] = "question_exist" ;
																					  echo json_encode($response);
																				  }else{
																					  $questionObjt->insertCrowdSourceAndQuestion($questionDescription, $questionType,$currentDate,$crowdSourceID);
																					  $questionId =  $questionObjt->getQuestionIdFromDescription($questionDescription);
																		              $optionObjt ->insertOption($questionId);
																					  
																					  $response['response'] = "question_inserted" ;
																					  echo json_encode($response);
																				  }			  
																	 }else{
																				   $questionObjt = new questionClass($questionDescription,$questionType,$currentDate);
																				  //insert questions
																				  
																				  $questions =[1,2,3];
																				  $tryin = $questionObjt->insertCrowdSourceAndQuestion($questionDescription,$questionType,$currentDate,$crowdSourceID);
                                                                                  $optionObjt ->insertOption($questionId);																				 
																				  $response['response'] =  "question_inserted"  ;
																				  echo json_encode($response);
																	 }	
																 }else{
																				  $response['response'] = "no_crowd_source_found" ;
																				  echo json_encode($response);
																 }
														 
														 }else if($questionType == 'true_false_question'){
															         if($crowdObjt->getCrowdSourceId($crowd_source_name) !=0)  {
																	 $crowdSourceID = $crowdObjt->getCrowdSourceId($crowd_source_name);
																	 if($crowdObjt->getCrowdSourceQuestionIds($crowdSourceID) != 0){
																		       
																			   $questionObjt = new questionClass($questionDescription,$questionType,$currentDate);
																			   $crowdSourceQuestionIds = $crowdObjt->getCrowdSourceQuestionIds($crowdSourceID);
																			   $questionExistStatus= $questionObjt->questionExist($crowdSourceQuestionIds, $questionDescription);
																				  if ($questionExistStatus == true){
																					   $response['response'] = "question_exist" ;
																					  echo json_encode($response);
																				  }else{
																					  $questionObjt->insertCrowdSourceAndQuestion($questionDescription, $questionType,$currentDate,$crowdSourceID);
																					  $questionId =  $questionObjt->getQuestionIdFromDescription($questionDescription);
																					  $optionArray = ["true","false"];
																					  
																					  foreach ($optionArray as $option){
																						  $optionObjt = new optionClass($option,$currentDate);
																						  $optionObjt ->insertOption($questionId);
																					  }
																		              
																					  
																					  $response['response'] = "question_inserted" ;
																					  echo json_encode($response);
																				  }			  
																	 }else{
																				   $questionObjt = new questionClass($questionDescription,$questionType,$currentDate);
																				  //insert questions
																				  
																				  $questions =[1,2,3];
																				  $tryin = $questionObjt->insertCrowdSourceAndQuestion($questionDescription,$questionType,$currentDate,$crowdSourceID);
																				  $questionId =  $questionObjt->getQuestionIdFromDescription($questionDescription);
																					  $optionArray = ["true","false"];
																					  
																					  foreach ($optionArray as $option){
																						  $optionObjt = new optionClass($option,$currentDate);
																						  $optionObjt ->insertOption($questionId);
																					  }
																				  $response['response'] =  "question_inserted"  ;
																				  echo json_encode($response);
																	 }	
																 }else{
																				  $response['response'] = "no_crowd_source_found" ;
																				  echo json_encode($response);
																 }
									                   }else if($questionType == 'choose_One_picture_question' || $questionType == 'choose_Multiple_picture_question' || $questionType == 'rate_question_image'){
															  if($crowdObjt->getCrowdSourceId($crowd_source_name) !=0)  {
																	 $crowdSourceID = $crowdObjt->getCrowdSourceId($crowd_source_name);
																	 if($crowdObjt->getCrowdSourceQuestionIds($crowdSourceID) != 0){
																			   $questionObjt = new questionClass($questionDescription,$questionType,$currentDate);
																			   $crowdSourceQuestionIds = $crowdObjt->getCrowdSourceQuestionIds($crowdSourceID);
																			   $questionExistStatus= $questionObjt->questionExist($crowdSourceQuestionIds, $questionDescription);
																				  if ($questionExistStatus == true){
																					   $response['response'] = "question_exist" ;
																					  echo json_encode($response);
																				  }else{
																				  //working with images
																					    $imagePath ='../upload/'.$questionNumber.'/' ;
	                                                                                         if (file_exists($imagePath)) {
																								    if (is_dir_empty($imagePath)) {
																										 $response['response']="folder_empty";
																										 echo json_encode($response);
																									}else{
																										 $files = scandir($imagePath);
																										 $destination = '../upload/crowd_source/quesion_with_pictures/' ;
																										 $Fulldestination = 'http://localhost/bs-binary-admin/upload/crowd_source/quesion_with_pictures/' ;
																								         //start getting stuff from the source file to destination	
                                                                                                         $questionObjt = new questionClass($questionDescription," ",$currentDate);
																										 $questionObjt->insertCrowdSourceAndQuestion($questionDescription, $questionType,$currentDate,$crowdSourceID);
																		                                 $questionId =  $questionObjt->getQuestionIdFromDescription($questionDescription);	
																										 if ($questionId  !=0){
																												foreach ($files as $file) {
																													 if (in_array($file, array(".",".."))) continue;
																															 $optionObjt = new optionClass($Fulldestination.$file,$currentDate);
																															 $optionObjt ->insertOption($questionId);
																															 $PictureArr[] = $imagePath.$file;
																														if (copy($imagePath.$file, $destination.$file)) {
                                                                                                                          	 																														
																														}
																												 }
                                                                                                                       	     $response['response'] = "question_choose_picture_inserted";
																														     echo json_encode($response);																											 
																										  }else{
																														$response['response'] = "this question not found";
																														echo json_encode($response);
																										  }
																											//remove the empty directory
																											deleteDirectory($imagePath);	
																								            //end of getting stuff from the source file to destination
																								           
																								     }
																									    
																							 }else{
																								 $response['response'] = "does not exist" ;
																					             echo json_encode($response);
																							 }
																				  }			  
																	 }else{
																				  //working with images
																					    $imagePath ='../upload/'.$questionNumber.'/' ;
	                                                                                         if (file_exists($imagePath)) {
																								    if (is_dir_empty($imagePath)) {
																										 $response['response']="folder_empty";
																										 echo json_encode($response);
																									}else{
																										 $files = scandir($imagePath);
																										 $destination = '../upload/crowd_source/quesion_with_pictures/' ;
																										 $Fulldestination = 'http://localhost/bs-binary-admin/upload/crowd_source/quesion_with_pictures/' ;
																								        
																								         //start getting stuff from the source file to destination	
                                                                                                         $questionObjt = new questionClass($questionDescription," ",$currentDate);
																										 $questionObjt->insertCrowdSourceAndQuestion($questionDescription, $questionType,$currentDate,$crowdSourceID);
																		                                 $questionId =  $questionObjt->getQuestionIdFromDescription($questionDescription);	
																										 if ($questionId  !=0){
																												foreach ($files as $file) {
																													 if (in_array($file, array(".",".."))) continue;
																															 $optionObjt = new optionClass($Fulldestination.$file,$currentDate);
																															 $optionObjt ->insertOption($questionId);
																															 $PictureArr[] = $imagePath.$file;
																														if (copy($imagePath.$file, $destination.$file)) {	 
																														}
																												 }
                                                                                                                        $response['response'] = "question_choose_picture_inserted";
																														echo json_encode($response);																												 
																										  }else{
																														$response['response'] = "this question not found";
																														echo json_encode($response);
																										  }
																										 //delete pictures from source folder
																											foreach ($PictureArr as $file) {
																												unlink($file);
																											}
																											//remove the empty directory
																											deleteDirectory($imagePath);
																								         //end of getting stuff from the source file to destination
																								    }		    
																							 }else{
																								 $response['response'] = "does not exist" ;
																					             echo json_encode($response);
																							 }
																	 }	
																 }else{
																				  $response['response'] =  "no_crowd_source_found" ;
																				  echo json_encode($response);
																 }
														  }else {
															  $response['response'] =  "question Type problem" ;
												              echo json_encode($response);
														  }															 
										  }
									 }
								   break;
								   case "disable_question":
							         
									 /*
									    just testing this
									 */
									 
									 if(isset($_POST['param'])){
										 $question_id = trim($_POST['param']);
									     $dsableQuestionQuesry = mysql_query("UPDATE question_tbl SET quest_status=0 WHERE  quest_id=$question_id ");
										 if($dsableQuestionQuesry ){
											 $response['response'] = "question_disabled";
							                 echo json_encode($response);
										 }else{
											 $response['response'] = "question_not_disabled";
							                 echo json_encode($response);
										 }
									      
									 }else{
										
									 }
									
									
								   break;
								   case "registerIfOption":
						           if(isset($_POST['param'])){
										 $params = $_POST['param'];
										 $paramsArr = explode(",",$params);
											   if (is_array($paramsArr)){
														 $optionDescription = $paramsArr[0];
														 $questionDescription = $paramsArr[1];
														 $crowd_source_name = $paramsArr[2];
														 $optionDescription = trim($optionDescription);
														 $questionDescription = trim($questionDescription);
														 $crowd_source_name = trim($crowd_source_name);
														 if($crowdObjt->getCrowdSourceId($crowd_source_name) !=0)  {
															 $crowdSourceID = $crowdObjt->getCrowdSourceId($crowd_source_name);
															  if($crowdObjt->getCrowdSourceQuestionIds($crowdSourceID) != 0){
																       //$questionObjt = new questionClass($questionDescription,$questionType,$currentDate);
																       $crowdSourceQuestionIds = $crowdObjt->getCrowdSourceQuestionIds($crowdSourceID);
																	   $optionObjt = new optionClass($optionDescription,$currentDate);
																	   if($optionObjt ->checkIfOptionExist($crowdSourceQuestionIds,$optionDescription) == true ){
																		     $response['response'] = "option exist";
							                                                 echo json_encode($response);
																	   }else{
																		   $questionObjt = new questionClass($questionDescription," ",$currentDate);
																		   $questionId =  $questionObjt->getQuestionIdFromDescription($questionDescription);
																		      if ($questionId  !=0){
																		           if($optionObjt ->insertOption($questionId) == true ){
																		                    $response['response'] = "option_inserted";
							                                                                echo json_encode($response);
																	                }else{
																		                    $response['response'] = "option not inserted";
							                                                                echo json_encode($response);
																	                }
																			  }else{
																				            $response['response'] = "this question not found";
							                                                                echo json_encode($response);
																			  }
																	   }		   	
															  }else{
																       $response['response'] = "no_question_found_for_crowd_source";
							                                           echo json_encode($response);	
															  }
                                                          }else{
															              $response['response'] =  "no_crowd_source_found" ;
																		  echo json_encode($response);
														 }			
											   }else{
													 $response['response'] =  "not array" ;
													 echo json_encode($response);
											   }
								   }
			                         break;
								default:
									$response['response'] = "default returned";
							        echo json_encode($response);
							} 
	}		
?>