<?php


 include "connect.php";
 
 
 
   //creating admin class
   class usersClass{
		  
		  public function getUsersInfo($column){
					$column = trim($column);
					$locationjohannesburgCount= 0;
					$locationpretoriaCount= 0;
					$locationdurbanCount= 0;
					$locationcapeTownCount= 0;
					$ageCount= 0;
					$genderMCount= 0;
					$genderFCount= 0;
					$activeCount= 0;
					$inactiveCount= 0;		 
			 		 
			$jsonArray = array();		 
			$ageArray = array();	
			
			 if ($column == "Location" ){
			         $userQuery = mysql_query("SELECT * FROM user_tbl");
			         $userQueryNumRow = mysql_num_rows($userQuery);
			 
					   if ($userQueryNumRow  != 0) {
					  //Converting the results into an associative array
					  
					     
						  while($row = mysql_fetch_assoc($userQuery)) {
							  $city= $row['u_city'];
							  $jsonArrayJozi = array();
							  $jsonArrayPretoria = array();
							  $jsonArrayDurban = array();
							  $jsonArrayCapeTown = array();
							  switch ($city) {
								 case "johannesburg":
								       
										
								       $locationjohannesburgCount = $locationjohannesburgCount + 1;
									   $jsonArrayItem['label'] = "johannesburg";
									   $jsonArrayItem['value'] = $locationjohannesburgCount;
									break;
									
								 case "pretoria":
								       $locationpretoriaCount = $locationpretoriaCount +1;
									   $jsonArrayItem['label'] = "pretoria";
									   $jsonArrayItem['value'] = $locationpretoriaCount;
									break;
								 case "durban":
								       $locationdurbanCount = $locationdurbanCount +1;
									   $jsonArrayItem['label'] = "durban";
									   $jsonArrayItem['value'] = $locationdurbanCount;
									break;
								 case "capeTown":
								       $locationcapeTownCount = $locationcapeTownCount +1;
									   //$jsonArrayItem['label'] = "capeTown";
									   $jsonArrayItem['value'] = $locationcapeTownCount;
									   
									break;
									
								 default:
								     
							}
							
							//array_push($jsonArray, $jsonArrayItem);
						}
						        $jsonArrayJozi = ["label"=>"johannesburg","value" => $locationjohannesburgCount];
								$jsonArrayPretoria = ["label"=>"pretoria","value" => $locationpretoriaCount];;
							    $jsonArrayDurban = ["label"=>"durban","value" => $locationdurbanCount];;
							    $jsonArrayCapeTown = ["label"=>"capeTown","value" => $locationcapeTownCount];;
								
								array_push($jsonArray, $jsonArrayJozi);
								array_push($jsonArray, $jsonArrayPretoria);
								array_push($jsonArray, $jsonArrayDurban);
								array_push($jsonArray, $jsonArrayCapeTown);
						       return  $jsonArray;
					   }else{
						      return "nada";
					   }
					
             }else if($column == "Age" ){
				       $userQuery = mysql_query("SELECT * FROM user_tbl");
			           $userQueryNumRow = mysql_num_rows($userQuery);
			            $jsonArray_18_21 =0 ;
						$jsonArray_22_26 =0 ;
						$jsonArray_27_30 =0 ;
						$jsonArray_31_35 =0 ;
						$jsonArray_36_40 =0 ;
						$jsonArray_41_45 =0 ;
						$jsonArray_46_50 =0 ;
						$jsonArray_51_55 =0 ;
						$jsonArray_56_60 =0 ;
						$jsonArray__up60 =0 ;
						
						$jsonArray_18_21Arr =array();
						$jsonArray_22_26Arr =array();
						$jsonArray_27_30Arr =array();
						$jsonArray_31_35Arr =array();
						$jsonArray_36_40Arr =array();
						$jsonArray_41_45Arr =array();
						$jsonArray_46_50Arr =array();
						$jsonArray_51_55Arr =array();
						$jsonArray_56_60Arr =array();
						$jsonArray__up60Arr =array();
						
						
						
					   if ($userQueryNumRow  != 0) {
						      while($row = mysql_fetch_assoc($userQuery)) {
							      $age= $row['u_age'];
								  
                                       if ($age >= 18 && $age <= 21){
										   $jsonArray_18_21 = $jsonArray_18_21 +1;
									   }else if ($age >= 22 && $age <= 26){
										   $jsonArray_22_26 = $jsonArray_22_26 +1;
									   }else if ($age >= 27 && $age <= 30){
										   $jsonArray_27_30 = $jsonArray_27_30 +1;
									   }else if ($age >=31 && $age <= 35){
										   $jsonArray_31_35 = $jsonArray_31_35 +1;
									   }else if ($age >=36 && $age <= 40){
										   $jsonArray_36_40 = $jsonArray_36_40 +1;
									   }else if ($age >=41 && $age <= 45){
										   $jsonArray_41_45 = $jsonArray_41_45 +1;
									   }else if ($age >=46 && $age <= 50){
										   $jsonArray_46_50 = $jsonArray_46_50 +1;
									   }else if ($age >=51 && $age <= 55){
										   $jsonArray_51_55 = $jsonArray_51_55 +1;
									   }else if ($age >=56 && $age <= 60){
										   $jsonArray_56_60 = $jsonArray_56_60 +1;
									   }else{
										   $jsonArray__up60 = $jsonArray__up60 +1;
									   }
								  //array_push($ageArray, $age);
						      }
							        $jsonArray_18_21Arr = ["label"=>"18-21","value" => $jsonArray_18_21];
									$jsonArray_22_26Arr = ["label"=>"22_26","value" => $jsonArray_22_26];
									$jsonArray_27_30Arr = ["label"=>"27_30","value" => $jsonArray_27_30];
									$jsonArray_31_35Arr = ["label"=>"31_35","value" => $jsonArray_31_35];
									$jsonArray_36_40Arr = ["label"=>"36_40","value" => $jsonArray_36_40];
									$jsonArray_41_45Arr = ["label"=>"41_45","value" => $jsonArray_41_45];
									$jsonArray_46_50Arr = ["label"=>"46_50","value" => $jsonArray_46_50];
									$jsonArray_51_55Arr = ["label"=>"51_55","value" => $jsonArray_51_55];
									$jsonArray_56_60Arr = ["label"=>"56_60","value" => $jsonArray_56_60];
									$jsonArray__up60Arr = ["label"=>"up60","value" => $jsonArray__up60];
									
								
								    array_push($ageArray, $jsonArray_18_21Arr);
									array_push($ageArray, $jsonArray_22_26Arr);
									array_push($ageArray, $jsonArray_27_30Arr);
									array_push($ageArray, $jsonArray_31_35Arr);
									array_push($ageArray, $jsonArray_36_40Arr);
									array_push($ageArray, $jsonArray_41_45Arr);
									array_push($ageArray, $jsonArray_46_50Arr);
									array_push($ageArray, $jsonArray_51_55Arr);
									array_push($ageArray, $jsonArray_56_60Arr);
									array_push($ageArray, $jsonArray__up60Arr);
									
						   return $ageArray;
					   }else{
						   return "not found";
					   }
			 }			   
	    }
		  

		  
	}
	  
	  
?>