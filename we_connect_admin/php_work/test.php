<?php


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

 if($_POST['image_form_submit']){
     $questionNum = $_POST['image_form_submit']; 
  
				  if($questionNum){
					 $questionNum = trim ($questionNum);	 
					 if (!file_exists('../upload/'.$questionNum)) {
						 mkdir('../upload/'.$questionNum, 0777, true);
								$images_arr = array();
								foreach($_FILES['images']['name'] as $key=>$val){
									$image_name = $_FILES['images']['name'][$key];
									$tmp_name 	= $_FILES['images']['tmp_name'][$key];
									$size 		= $_FILES['images']['size'][$key];
									$type 		= $_FILES['images']['type'][$key];
									$error 		= $_FILES['images']['error'][$key];	
									if (is_dir('../upload/'.$questionNum.'/')) {			
										   $target_dir = '../upload/'.$questionNum.'/';
										   $target_file = $target_dir.$_FILES['images']['name'][$key];
											if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$target_file)){
												$images_arr[] = $target_file;
											}
													//Generate images view
																	
									}else{
										$response['response']= 'does not exist';
										echo json_encode($response);
									}		
								}
                                                    if(!empty($images_arr)){ $count=0;
														foreach($images_arr as $image_src){ 
															   $response['response']= $image_src;;
															   ?>
															   <img src="<?php echo 'upload/'.$questionNum.'/'.$_FILES['images']['name'][$key];?>" width="70px" height="70px;">
															   <?php
														 }
													}								
						 
					}else{
						$target_dir = '../upload/'.$questionNum.'/';
						deleteDirectory($target_dir); 
						 mkdir('../upload/'.$questionNum, 0777, true);
								$images_arr = array();
								foreach($_FILES['images']['name'] as $key=>$val){
									$image_name = $_FILES['images']['name'][$key];
									$tmp_name 	= $_FILES['images']['tmp_name'][$key];
									$size 		= $_FILES['images']['size'][$key];
									$type 		= $_FILES['images']['type'][$key];
									$error 		= $_FILES['images']['error'][$key];	
									if (is_dir('../upload/'.$questionNum.'/')) {			
										   $target_dir = '../upload/'.$questionNum.'/';
										   $target_file = $target_dir.$_FILES['images']['name'][$key];
											if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$target_file)){
												$images_arr[] = $target_file;
											}
													//Generate images view
																	
									}else{
										$response['response']= 'does not exist';
										echo json_encode($response);
									}		
								}
								if(!empty($images_arr)){ $count=0;
														foreach($images_arr as $image_src){ 
															   $response= $image_src;;
															    ?>
															   <img src="<?php echo 'upload/'.$questionNum.'/'.$_FILES['images']['name'][$key];?>" width="70px" height="70px;">
															   <?php
														 }
													}
					}     
				  }else{
					  $response['response']= "empty";
						 echo json_encode($response);
				  }
 }
?>