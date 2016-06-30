<?php

   include "connect.php";
   //creating admin class
   class questionClass extends Crowd_sourceClass
   
  {
	public $questionDescription = "";
	public $quetionType ="";
	public $questionDateModified = "dd/mm/yyyy";
	  
	  
	public function  __construct ($questionDescription, $quetionType, $questionDateModified ){
		$this->questionDescription = $questionDescription;
		$this->quetionType = $quetionType;
		$this->questionDateModified = $questionDateModified;
	}
	
	public function questionExist($questionIds,$questionDescription){
		$total = [];
		$array_lenght = count($questionIds);
			if(is_array($questionIds)){
				
				for($i =0 ; $i < count($questionIds) ;++$i ){
                   //array_push($total,$ids);
				   
				   $questionExistdQuery = mysql_query("SELECT * FROM question_tbl WHERE quest_id = $questionIds[$i] and quest_desc = '$questionDescription'");
				   $questionExistdQueryNumRow = mysql_num_rows( $questionExistdQuery);
				   if($questionExistdQueryNumRow != 0){
					   $found = true;
				   }else{
					   $found = false;
				   }
                }
				
				return $found;
			}else{
				return 0;
			}
		  
	} 	 

      public function getQuestionIdFromDescription($questionDescription){
		   
				   $getQuestionIdFromDescriptionQuery = mysql_query("SELECT quest_id FROM question_tbl WHERE quest_desc = '$questionDescription'");
				   $getQuestionIdFromDescriptionQueryNumRow = mysql_num_rows( $getQuestionIdFromDescriptionQuery);
				   if($getQuestionIdFromDescriptionQueryNumRow != 0){
					   
					   while($row = mysql_fetch_assoc($getQuestionIdFromDescriptionQuery )){
						   $question_id = $row['quest_id'];
					   }
					  return $question_id;
				   }else{
					   return 0;
				   }
               
		  
	}
	
	//retreive all admin info
	public function getAllQuestionFromIs($question_id){
		$getQuestionsQuery = mysql_query("SELECT * FROM question_tbl WHERE quest_id =$question_id");
		$getQuestionsQueryNumRow = mysql_num_rows($getQuestionsQuery);
           if ($getQuestionsQueryNumRow != 0){
	              while($questionsRow = @mysql_fetch_assoc($getQuestionsQuery)){
					     $questionsObject [] = $questionsRow;
				  }
				  $response['response'] = "success";
				  //print_r(json_encode($crowd_s_Object));
				  return $questionsObject;
           }else{
			      $response['response'] = "No_question";
				  return json_encode($error); 
		   }	
	}
	
	
	public function insertQuestion($questionDescription,$questionType,$currentDate){
		$questionDescription= trim($questionDescription);
		$questionType= trim($questionType);
        $currentDate= trim($currentDate);
        
		$insertQuestionQuery = mysql_query("INSERT INTO question_tbl (quest_desc, quest_type,quest_last_date_modified ) VALUES ('$questionDescription', '$questionType', '$currentDate' )");
				
	}
	
	public function insertCrowdSourceAndQuestion($questionDescription,$questionType,$currentDate,$crowdSourceID){
		$questionDescription= trim($questionDescription);
		$questionType= trim($questionType);
        $currentDate= trim($currentDate);
        $crowdSourceID= trim($crowdSourceID);

		$insertQuestionQuery = mysql_query("INSERT INTO question_tbl (quest_desc, quest_type,quest_last_date_modified ) VALUES ('$questionDescription', '$questionType', '$currentDate' )");
		
		
			   if ($insertQuestionQuery ){
				   
				   $lastQuestionInserted= mysql_insert_id();
				   $insertQuestionQuery = mysql_query("INSERT INTO crowd_scr_quest (crow_src_id, quest_id,crowd_scr_q_date_mod ) VALUES ($crowdSourceID, $lastQuestionInserted, '$currentDate' )");
				
				   
				   return $crowdSourceID;
			   }
		
		
	}
 }    
		

?>
