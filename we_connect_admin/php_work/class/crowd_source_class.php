<?php

   include "connect.php";
   //creating admin class
   class Crowd_sourceClass
   
  {
	public function crowd_S_name_Exist($crowd_S_name){
		
		//remove space and anything that isn't a digit
		$crowd_S_nameQuery = mysql_query("SELECT * FROM crowd_source_tbl WHERE crow_src_name ='$crowd_S_name'");
		$crowd_S_nameQueryNumRow = mysql_num_rows($crowd_S_nameQuery);
		
           if ($crowd_S_nameQueryNumRow !=0){	     				  
	             return true;
           }else{
				 return false;
		   }	
	} 	 

     public function insert_crowd_source($crowd_S_name, $crowd_S_desc){
		$crowd_S_name_check = $this->crowd_S_name_Exist($crowd_S_name);
		
		//check first if the crowd source name oalready exist
		if ( $crowd_S_name_check == false){
		    $insert_crowd_SQuery = mysql_query("INSERT INTO crowd_source_tbl (crow_src_name, crow_src_desc) VALUES ('$crowd_S_name', '$crowd_S_desc')");
			  	
		      //check first if the query went through
				if ( $insert_crowd_SQuery == true){
					 return true;
				}else{
					return false;
				}
		}
	}

    //retreive all admin info
	public function retrieve_all_crowd_source(){
		$allCrowd_s_Query = mysql_query("SELECT * FROM crowd_source_tbl WHERE crow_src_status =0");
		$allCrowd_s_QueryNumRow = mysql_num_rows($allCrowd_s_Query);
           if ($allCrowd_s_QueryNumRow != 0){
	              while($crowd_s_Row = @mysql_fetch_assoc($allCrowd_s_Query)){
					     $crowd_s_Object [] = $crowd_s_Row;
				  }
				  $success['success'] = "success";
				  //print_r(json_encode($crowd_s_Object));
				  return $crowd_s_Object;
           }else{
			      $error['error'] = "No record Found";
				  return json_encode($error); 
		   }	
	}
	
	public function getCrowdSourceId($crowdSourceName){
		
		$getCrowdSourceIdQuery = mysql_query("SELECT crow_src_id FROM crowd_source_tbl WHERE crow_src_name = '$crowdSourceName' ");
		$getCrowdSourceIdQueryNumRow = mysql_num_rows($getCrowdSourceIdQuery);
		
           if ($getCrowdSourceIdQueryNumRow != 0){
	              while($crowd_s_Row = mysql_fetch_assoc($getCrowdSourceIdQuery)){
					     $crowdID  = $crowd_s_Row['crow_src_id'];
				  }
				  $crowdSourceID = $crowdID ;
				  return $crowdSourceID;
           }else{
			      
				  return 0; 
		   }	
	}
	
	public function getCrowdSourceQuestionIds($crowdSourceId){
		
		$getCrowdSourceQuestionIdsQuery = mysql_query("SELECT quest_id FROM crowd_scr_quest WHERE crow_src_id = $crowdSourceId ");
		$getCrowdSourceQuestionIdsQueryNumRow = mysql_num_rows($getCrowdSourceQuestionIdsQuery);
		
           if ($getCrowdSourceQuestionIdsQueryNumRow != 0){
			   $questions= [];
	              while($crowd_s_Row = mysql_fetch_assoc($getCrowdSourceQuestionIdsQuery)){
					     
						
					     $crowdSourceQuestioniIds  = $crowd_s_Row['quest_id'];
						 array_push($questions,$crowdSourceQuestioniIds);
				  }
				  
				  return $questions;
           }else{
			      
				  return 0; 
		   }	
	}
	
	
	public function getCrowdSourceIDFromCrowdSourceName($crowdSourceName){
		
		$getCrowdSourceIDFromCrowdSourceNameQuery = mysql_query("SELECT crow_src_id FROM crowd_source_tbl WHERE crow_src_name = '$crowdSourceName' limit 2");
		$getCrowdSourceIDFromCrowdSourceNameQueryNumRow = mysql_num_rows($getCrowdSourceIDFromCrowdSourceNameQuery);
		
           if ($getCrowdSourceIDFromCrowdSourceNameQueryNumRow != 0){
	              while($crowd_s_Row = @mysql_fetch_assoc($getCrowdSourceIDFromCrowdSourceNameQuery)){
					     $crowdSourceId= $crowd_s_Row['crow_src_id'];
				  }
				 
				  //print_r(json_encode($crowd_s_Object));
				  return $crowdSourceId;
           }else{
			      $error = "CrowdSourceIDNotFound";
				  return $error; 
		   }	
	}
	
	
	 //check_active_crowd_source
	public function check_active_crowd_source(){
		
		$activeCrowd_s_Query = mysql_query("SELECT * FROM crowd_source_tbl WHERE crow_src_status = 1");
		$activeCrowd_s_QueryNumRow = mysql_num_rows($activeCrowd_s_Query);
		
           if ($activeCrowd_s_QueryNumRow != 0){
				  return true;
           }else{
				  return false; 
		   }	
	}

	 //check_ if crowd source exist
	public function check_if_crowd_source_exist($crowd_source_name){
		 $crowd_source_name = $crowd_source_name;
		 $crowd_source_name = trim($crowd_source_name);
		 
		$activeCrowd_s_Query = mysql_query("SELECT * FROM crowd_source_tbl WHERE crow_src_name = '$crowd_source_name'");
		$activeCrowd_s_QueryNumRow = mysql_num_rows($activeCrowd_s_Query);
		
           if ($activeCrowd_s_QueryNumRow != 0){
				  return true;
           }else{
				  return false; 
		   }	
	}
	
	
	public function crowd_source_edit_selected_col($crowd_s_id, $crowd_s_column,  $crowd_s_new_val){
		
		$edit_selected_colQuery =  mysql_query("UPDATE crowd_source_tbl  SET {$crowd_s_column} ='$crowd_s_new_val'  WHERE crow_src_id =$crowd_s_id");
		
		if ($edit_selected_colQuery){
			return true;
		}else{
			return false;
		}		
	}
	
	public function crowd_source_activate($crowd_s_id){
		
		//if ($this ->check_active_crowd_source() === false) {
			$edit_selected_colQuery =  mysql_query("UPDATE crowd_source_tbl  SET crow_src_status =1  WHERE crow_src_id =$crowd_s_id");
			 
			if ($edit_selected_colQuery){
			    return true;
		    }else{
			    return false;
		    }
		//}
			
	}
	
	public function updateCrowdSourceNameAndDescription($newCrowdSource_name, $crowdSourceDescription,$oldCrowdSourceName){
		
		$updateCrowdSourceNameAndDescriptionQuery =  mysql_query("UPDATE crowd_source_tbl  SET crow_src_name ='$newCrowdSource_name' and crow_src_desc ='$crowdSourceDescription'  WHERE crow_src_name ='$oldCrowdSourceName'");
		
		if ($updateCrowdSourceNameAndDescriptionQuery){
			return true;
		}else{
			return false;
		}		
	}
	
	public function updateCrowdSourceDescription($crowdSourceDescription,$oldCrowdSourceName){
		
		$updateCrowdSourceDescriptionQuery =  mysql_query("UPDATE crowd_source_tbl  SET crow_src_desc ='$crowdSourceDescription'  WHERE crow_src_name ='$oldCrowdSourceName'");
		
		if ($updateCrowdSourceDescriptionQuery){
			return true;
		}else{
			return false;
		}		
	}
	
	public function updateCrowdSourceName($crowdSourceName,$oldCrowdSourceName){
		
		$updateCrowdSourceNameQuery =  mysql_query("UPDATE crowd_source_tbl  SET crow_src_name ='$crowdSourceName'  WHERE crow_src_name ='$oldCrowdSourceName'");
		
		if ($updateCrowdSourceNameQuery){
			return true;
		}else{
			return false;
		}		
	}
  
	public function getPendingActive(){
	 $crowdSourceDetailsQuery = mysql_query("SELECT * FROM crowd_source_tbl");
	 $crowdSourceDetailsQueryNumRow = mysql_num_rows($crowdSourceDetailsQuery);
			 
			 $activeCount=0;
			 $pendingCount=0;
			 $doneCount=0;
			 $activeArr=array();
			 $pendingArr=array();
			 $doneArr=array();
			 $jsonArray=array();
			 
					   if ($crowdSourceDetailsQueryNumRow  != 0) {
					  //Converting the results into an associative array
					  
					     
						  while($row = mysql_fetch_assoc($crowdSourceDetailsQuery)) {
							  $crowd_sourceStatus= $row['crow_src_status'];
							  
							  if ($crowd_sourceStatus == 0){
								  $activeCount = $activeCount +1;
							  }elseif($crowd_sourceStatus == 1){
								  $pendingCount = $pendingCount +1;
							  }elseif($crowd_sourceStatus == 2){
								 $doneCount = $doneCount +1; 
							  }
						  }
						  
						  $activeArr = ["label"=>"active","value" => $activeCount];
						  $pendingArr = ["label"=>"pending","value" => $pendingCount];
						  $doneArr = ["label"=>"done","value" => $doneCount];
						  
						  array_push($jsonArray, $activeArr);
						  array_push($jsonArray, $pendingArr);
						  array_push($jsonArray, $doneArr);
						  
						  return  $jsonArray;
						  
					   }						  
							  
							  
							  
    }
  }
 
 
     
		

?>
