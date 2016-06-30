<?php
function is_dir_empty($dir) {
  if (!is_readable($dir)) return NULL; 
  return (count(scandir($dir)) == 2);
}


 if($_POST['param']){
	 $questionNumber =$_POST['param'];
	 $imagePath ='../upload/'.$questionNumber.'/' ;
	 if (file_exists($imagePath)) {
		 
		    if (is_dir_empty($imagePath)) {
			     $response['response']="empty";
                 echo json_encode($response);
			}else{		
				 $source = '../upload/'.$questionNumber.'/' ;
				// Get array of all source files
                  $files = scandir($source);
                   // Identify directories
                  
                   $destination = '../upload/crowd_source/quesion_with_pictures/' ;
				   $thePath = '/upload/crowd_source/quesion_with_pictures/' ;
                  // Cycle through all source files
                   foreach ($files as $file) {
					  if (in_array($file, array(".",".."))) continue;
					  // If we copied this successfully, mark it for deletion
					  if (copy($source.$file, $destination.$file)) {
						$delete[] = $source.$file;
					  }
					}
					// Delete all successfully-copied files
					foreach ($delete as $file) {
					  unlink($file);
					}







				 
				    $handle = opendir($destination);
					 while(false !== ($file = readdir($handle))){
					   if(is_file($destination.'/'.$file) && is_readable($destination.'/'.$file)){
						$fileNames[] = $thePath.$file;
					   }
					 }
					closedir($handle);
					$fileNames = array_reverse($fileNames);
					
					$response['response']=$fileNames;
                    echo json_encode($response);
				 
				 
			}
            
			
	 }else{
		 $response['response']="not exist";
        echo json_encode($response);
	 }

 }else{
	  $response['response']="error";
    echo json_encode($response);
	 
 }
?>