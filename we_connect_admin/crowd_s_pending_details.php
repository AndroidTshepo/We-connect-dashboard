	
<script>
	
	  // Set button class names 
	 var editQuestionBtn = "editQuestionBtn";
	 var removeQuestionBtn = "removeQuestionBtn";
	 
	 

</script>  

   <div class="hidden_editable_on_pending" >
                     
          <div class="panel panel-default pending_view_details" style="margin-top:300px;">
					   
<?php 
		  include('includes/header_details.php');
		  include('php_work/class/crowd_source_class.php');
		  include('php_work/class/question_class.php');
		  include('php_work/class/option_class.php');
		  $crowdObjt = new Crowd_sourceClass(); 
			  if (isset($_GET['crowd_source_id'])) {
				// echo $_GET['crowd_source_id'];
			  }else{
				// echo $_GET['crowd_source_id'];
			  }
			 $crowdSourceID =  $_GET['crowd_source_id'];
				 if($crowdObjt->getCrowdSourceQuestionIds($crowdSourceID) != 0){
					 $crowdSourceQuestionIds = $crowdObjt->getCrowdSourceQuestionIds($crowdSourceID);
					 $count = 0;
					 foreach($crowdSourceQuestionIds as $questionId){
						     $questionObjt = new questionClass("","","");
						     $questionsDetails= $questionObjt->getAllQuestionFromIs($questionId);
							 
							 
							     foreach($questionsDetails as $questionColumn){
									  //echo $questionColumn['quest_id'];
									  //echo $questionColumn['quest_desc'];
									  //echo $questionColumn['quest_last_date_modified'];
									  //echo $questionColumn['quest_type'];
									 
									  $count++;
									    $questionType = $questionColumn['quest_type'];
						                switch ($questionType) {
									           case "multileChoiceQuestOne":
											               ?>
														             <div id="multileChoiceQuestOne">
																		  <div class="panel-heading<?php echo  $questionColumn['quest_id'];?>">
																			   <label> Question <?php echo $count ;?> </label><br/>
																			   <textarea rows="4" cols="50" id="" > <?php echo $questionColumn['quest_desc'] ;?> </textarea><br/>
																			   <button class="editQuestionBtn btn"  id="<?php echo  $questionColumn['quest_id'];?>" >Edit Question</button><button class="removeQuestionBtn btn"  id="<?php echo  $questionColumn['quest_id'];?>">Remove Question</button>
																		  </div>
																		  
																		  <div class="panel-body">
																			  <table class="table table-striped table-bordered table-hover">
																		  <?php
																		          $optionObjt = new optionClass("","");
						                                                          $optionsDetails= $optionObjt->getAllOptionFromId($questionId);
																		  
																		          foreach($optionsDetails as $optionsColumn){
																					           ?>
																							          <tr><td>   
																			                              <input type="text" value="<?php echo $optionsColumn['option_desc'] ;?>" class="edit_input_op"></td><td><button class="btn">Edit</button><button class="btn">Remove</button></td>
																			                           </tr>
																					          <?php     
																				  }
																		  ?>
																			  </table>
																		  </div>
																	   </div>
														   <?php
											     break;
												 case "multileChoiceQuestMutiple":
											               ?>
														             <div id="multileChoiceQuestMutiple">
																		  <div class="panel-heading<?php echo  $questionColumn['quest_id'];?>">
																			   <label> Question <?php echo $count ;?> </label><br/>
																			   <textarea rows="4" cols="50" id="" > <?php echo $questionColumn['quest_desc'] ;?> </textarea><br/>
																			  <button class="editQuestionBtn btn"  id="<?php echo  $questionColumn['quest_id'];?>" >Edit Question</button><button class="removeQuestionBtn btn"  id="<?php echo  $questionColumn['quest_id'];?>">Remove Question</button>
																		  </div>
																		  
																		  <div class="panel-body">
																			  <table class="table table-striped table-bordered table-hover">
																		  <?php
																		          $optionObjt = new optionClass("","");
						                                                          $optionsDetails= $optionObjt->getAllOptionFromId($questionId);
																		  
																		          foreach($optionsDetails as $optionsColumn){
																					           ?>
																							          <tr><td>   
																			                              <input type="text" value="<?php echo $optionsColumn['option_desc'] ;?>" class="edit_input_op"></td><td><button class="btn">Edit</button><button class="btn">Remove</button></td>
																			                           </tr>
																					          <?php     
																				  }
																		  ?>
																			  </table>
																		  </div>
																	   </div>
														   <?php
											     break;
												 
												 case "true_false_question":
											               ?>
														             
																	 <div id="true_false">
																			  <div class="panel-heading<?php echo  $questionColumn['quest_id'];?>">
																						<label> Question <?php echo $count ;?> </label><br/>
																						<textarea rows="4" cols="50" id="" > <?php echo $questionColumn['quest_desc'] ;?> </textarea><br/>
																						<button class="editQuestionBtn btn"  id="<?php echo  $questionColumn['quest_id'];?>" >Edit Question</button><button class="removeQuestionBtn btn"  id="<?php echo  $questionColumn['quest_id'];?>">Remove Question</button>
																			  </div>
																			  <div class="panel-body responsive">
																				   <table class="table table-striped table-bordered table-hover">
																				   <?php
																		                $optionObjt = new optionClass("","");
						                                                                $optionsDetails= $optionObjt->getAllOptionFromId($questionId);
																		  
																		                       foreach($optionsDetails as $optionColumn){
																					?>
																				   
																				  <tr><td>   
																				  <input type="text" value="<?php echo $optionColumn['option_desc'] ;?>" class="edit_input_op"></td>
																				  </tr>
																				  
																				  <?php     
																				  }
																		  ?>
																				  
																				  </table>
																			  </div>
																	  </div>

														   <?php
											     break;
												 
												  case "choose_One_picture_question":
											               ?>
														             
																	 <div id="choose_One_picture_question<?php echo  $questionColumn['quest_id'];?>">
																			  <div class="panel-heading">
																						<label> Question <?php echo $count ;?>  </label></br>
																						 <textarea rows="4" cols="50" id="" > <?php echo $questionColumn['quest_desc'] ;?></textarea><br/>
																						 <button class="editQuestionBtn btn"  id="<?php echo  $questionColumn['quest_id'];?>" >Edit Question</button><button class="removeQuestionBtn btn"  id="<?php echo  $questionColumn['quest_id'];?>">Remove Question</button>
																			  </div>
																			  <div class="panel-body">
																				  
																				   <?php
																		                $optionObjt = new optionClass("","");
						                                                                $optionsDetails= $optionObjt->getAllOptionFromId($questionId);
																		  
																		                       foreach($optionsDetails as $optionColumn){
																					?>
																				     <div class="choose_img">
																				     <img src="<?php echo $optionColumn['option_desc'] ;?>" width=200px; height=200px; ><button type="file" class="btn">
																					 <input type="file" class="edit_input_op" value="change">
																					  <button class="btn">Remove</button>
																				      </div>
																				  <?php     
																				  }
																		  ?>
																						
																					  <div class="choose_img"><img src=""><button class="btn">add</button></div>
																				  </div>
																		  </div>

														   <?php
											     break;
												 
												 case "choose_Multiple_picture_question":
											               ?>
																	 <div id="choose_One_picture_question<?php echo  $questionColumn['quest_id'];?>">
																			  <div class="panel-heading">
																						<label> Question <?php echo $count ;?>  </label></br>
																						 <textarea rows="4" cols="50" id="" > <?php echo $questionColumn['quest_desc'] ;?></textarea><br/>
																						 <button class="editQuestionBtn btn"  id="<?php echo  $questionColumn['quest_id'];?>" >Edit Question</button><button class="removeQuestionBtn btn"  id="<?php echo  $questionColumn['quest_id'];?>">Remove Question</button>
																			  </div>
																			  <div class="panel-body">
																				  
																				   <?php
																		                $optionObjt = new optionClass("","");
						                                                                $optionsDetails= $optionObjt->getAllOptionFromId($questionId);
																		  
																		                       foreach($optionsDetails as $optionColumn){
																					?>
																				     <div class="choose_img">
																				     <img src="<?php echo $optionColumn['option_desc'] ;?>" width=200px; height=200px; ><button type="file" class="btn">
																					 <input type="file" class="edit_input_op" value="change">
																					  <button class="btn">Remove</button>
																				      </div>
																				  <?php     
																				  }
																		  ?>	
																					  <div class="choose_img"><img src=""><button class="btn">add</button></div>
																				  </div>
																		  </div>

														   <?php
											     break;
												 
												 case "rate_question_text":
												              ?>
															      <div id="rate_text">
																		   <div class="panel-heading<?php echo  $questionColumn['quest_id'];?>">
																					<label> Question <?php echo $count ;?>  </label></br>
																					<label> Rate this :  </label>
															                        <label>  </label></br>
																						 <textarea rows="4" cols="50" id="" > <?php echo $questionColumn['quest_desc'] ;?></textarea><br/>
																						 <button class="editQuestionBtn btn"  id="<?php echo  $questionColumn['quest_id'];?>" >Edit Question</button><button class="removeQuestionBtn btn"  id="<?php echo  $questionColumn['quest_id'];?>">Remove Question</button>
																			</div>
																  </div>
															  
															  
												 
												               <?php
												  break;
									
									              case "rate_question_image":
												              ?>
															      <div id="rate_pic">
																	   <div class="panel-heading<?php echo  $questionColumn['quest_id'];?>">
																				<label> Question <?php echo $count ;?>  </label></br>
																				<label> Rate this :  </label>
																				<button class="btn">Remove Question</button>
																	   </div>
																	  <div class="panel-body" style="margin-bottom:10px;">
																				  
																				   <?php
																		                $optionObjt = new optionClass("","");
						                                                                $optionsDetails= $optionObjt->getAllOptionFromId($questionId);
																		  
																		                       foreach($optionsDetails as $optionColumn){
																					?>
																				     <div class="choose_img">
																				     <img src="<?php echo $optionColumn['option_desc'] ;?>" width=200px; height=200px; ><button type="file" class="btn">
																					 <input type="file" class="edit_input_op" value="change">
																					  <button class="editQuestionBtn btn"  id="<?php echo  $questionColumn['quest_id'];?>" >Edit Question</button><button class="removeQuestionBtn btn"  id="<?php echo  $questionColumn['quest_id'];?>">Remove Question</button>
																				      </div>
																				  <?php     
																				  }
																		  ?>
																						
																					  
																				  </div>
																				  <?php
												  break;
												  
												  
											   default:
									                 $response['response'] = "problem with questionType";
							                         echo json_encode($response);
							            }
									 
									 
									 
								 }//close for each loop for getting details from question ids	 
							 
					 }//close for each loop for getting question ids
					 
					 //print_r($questionsDetails);
				 }else{		 
				 }
		 
	
	 
?>
					
                        <div class="panel-footer clearfix">
                          <div class="pull-right">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Save |</button>
                                    <button type="button" class="btn btn-secondary">Post |</button>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
    <?php include('includes/footer.php')?>

<script src="js_work/crowd_source/crowd_source_pending.js"></script>	

<script src="js_work/crowd_source/crowd_source_class.js"></script>