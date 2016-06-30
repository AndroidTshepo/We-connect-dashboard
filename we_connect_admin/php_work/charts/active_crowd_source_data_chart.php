<?php

include "connect.php";
if(isset($_POST['param']) ){
		$parameter = trim($_POST['param']);
		
		$selectingOptionsQuery = mysql_query("SELECT option_id  FROM participation_line WHERE quest_id = $parameter");
		$selectingOptionsQueryNumRow = mysql_num_rows($selectingOptionsQuery);
		
		if ($selectingOptionsQueryNumRow  != 0){
			$optionAll =array();
			$optionIDs = array();
			$addValue = array();
			   $jsonArray=array();
			   $counter=0;
			   $name = "tri";
			   $counterIds= array();
			   $countOptionsArr=array();
			   $c=0;
			   
		
			while($optionRow = mysql_fetch_assoc($selectingOptionsQuery)) {
				$option_id = $optionRow['option_id']; 
			   
			     array_push($countOptionsArr, $option_id);
				
						    
			   
			}
	
	      $occurence = array_count_values($countOptionsArr);
	      $newOccurence= (array) $occurence;
		  $nanan = [];
		    
	             foreach($occurence as $key => $values){
					 array_push($nanan, $key);
					      $getOptionsQuery = mysql_query("SELECT *  FROM option_tbl WHERE option_id = $key");
		                  $getOptionsQueryNumRow = mysql_num_rows($getOptionsQuery);
						  
						  while($optionDescrRow = mysql_fetch_assoc($getOptionsQuery)) {
							   $option_description = $optionDescrRow['option_desc']; 
							   $optionArr = ["label"=>"$option_description","value" => $values];
							  array_push($jsonArray, $optionArr);
						  }
						  
					 
				 }
			
			$response['response']=$jsonArray;
			echo json_encode($jsonArray);
			
			
		}else{
			
			
		}
		
			

}else{
	$response['response']="nothing_posted";
echo json_encode($response);
}


?>