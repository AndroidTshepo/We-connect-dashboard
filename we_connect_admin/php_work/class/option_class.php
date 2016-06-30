<?php

   include "connect.php";
   //creating admin class
   class optionClass extends questionClass  
   
  {
	public $optionDescription = "";
	public $dateAdded = "dd/mm/yyyy";
	  
	  
	public function  __construct ($optionDescription, $dateAdded){
		$this->optionDescription = $optionDescription;
		$this->dateAdded = $dateAdded;
	}
	
	public function checkIfOptionExist($questionIds,$optionDescription){
		$total = [];
		$array_lenght = count($questionIds);
			if(is_array($questionIds)){
				
				for($i =0 ; $i < count($questionIds) ;++$i ){
                   //array_push($total,$ids);
				   
				   $optionExistdQuery = mysql_query("SELECT * FROM option_tbl WHERE quest_id = $questionIds[$i] and option_desc = '$optionDescription'");
				   $optionExistdQueryNumRow = mysql_num_rows( $optionExistdQuery);
				   if($optionExistdQueryNumRow != 0){
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

	
	public function insertOption($questionId){
		
		$insertOptionQuery = mysql_query("INSERT INTO option_tbl (option_desc, option_date_added,quest_id) VALUES ('$this->optionDescription', '$this->dateAdded',$questionId)");
		
			   if ($insertOptionQuery ){
				   
				   return true;
			   }else{
				   return false;
			   }
		
		
	}
	
	
	public function getAllOptionFromId($quest_id){
		$getOptionsQuery = mysql_query("SELECT * FROM option_tbl WHERE quest_id =$quest_id");
		$getOptionsQueryNumRow = mysql_num_rows($getOptionsQuery);
           if ($getOptionsQueryNumRow != 0){
	              while($optionsRow = @mysql_fetch_assoc($getOptionsQuery)){
					     $optionsObject [] = $optionsRow;
				  }
				  $response['response'] = "success";
				  //print_r(json_encode($crowd_s_Object));
				  return $optionsObject;
           }else{
			      $response['response'] = "No_option";
				  return json_encode($response); 
		   }	
	}
 }    
		

?>
