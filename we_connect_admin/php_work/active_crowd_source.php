<?php
     include "class/connect.php";
        $activeCrowdSourceQuery = mysql_query("SELECT * FROM crowd_source_tbl WHERE crow_src_status =1");
		$activeCrowdSourceQueryNumRow = mysql_num_rows($activeCrowdSourceQuery);
		$status= "";
           if ($activeCrowdSourceQueryNumRow !=0){	     				  
	             while($activeCrowd_s_Row = @mysql_fetch_assoc($activeCrowdSourceQuery)){
					     $activeCrowdSourceObject [] = $activeCrowd_s_Row;
						 $questionids= array();
						 $crowd_source_id= $activeCrowd_s_Row['crow_src_id'];
						 
						 $questionIdsQuery = mysql_query("SELECT quest_id FROM crowd_scr_quest WHERE crow_src_id= $crowd_source_id");
						 $questionIdsQueryNumRow = mysql_num_rows($questionIdsQuery);
							  
							   if ($questionIdsQueryNumRow != 0){
			                        while($rowquestionids = mysql_fetch_assoc($questionIdsQuery)){
										 $questionid= $rowquestionids['quest_id'];
										 array_push($questionids,$questionid);
									}
							   }
							   
						  for($i =0 ; $i < count($questionids) ;++$i ){
					   //array_push($total,$ids);
								   
								   $getQuestionDetailsQuery = mysql_query("SELECT * FROM question_tbl WHERE quest_id = $questionids[$i]");
								   $getQuestionDetailsQueryNumRow = mysql_num_rows( $getQuestionDetailsQuery);
								   
								   
										   if($getQuestionDetailsQueryNumRow != 0){
											     while($rowgetQuestionDetails = mysql_fetch_assoc($getQuestionDetailsQuery)){
													    $activeQuestionsCrowdSourceObject [] = $rowgetQuestionDetails;
												 }
										   }else{
											   $status= "not working question";
										   }
						  }
						  
						 
				  }
           }else{
				 echo "not found";
		   }



?>