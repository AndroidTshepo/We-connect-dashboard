<?php include('includes/header.php');?>

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>      
<!-- /. NAV TOP  -->
<?php include('includes/side_nav.php');?> 
<?php include('php_work/active_crowd_source.php');?> 


<script src="jquery_simple_progressbar.js"></script>
<!-- /. NAV SIDE  -->
        
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="top_text"> Active CrowdSource</h2>   
                        <h5> </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">120 </p>
                    <p class="text-muted">Participants So far</p>
                </div>
             </div>
		     </div>
            <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">15 th</p>
                    <p class="text-muted">CrowdSource</p>
                </div>
             </div>
		     </div>
            <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-question"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">5 Question</p>
                    <p class="text-muted">For This CrowdSource</p>
                </div>
             </div>
		     </div>
            <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-calendar"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">20/20/16</p>
                    <p class="text-muted">Post Date</p>
                </div>
             </div>
		     </div>
			</div>
                 <!-- /. ROW  -->
                <hr />                
                <div class="row">                   
<!--crowd source questions---> 
        
		
  
                                   <?php
		                                    $activeCrowdSourceQuery = mysql_query("SELECT * FROM crowd_source_tbl WHERE crow_src_status =1");
											$activeCrowdSourceQueryNumRow = mysql_num_rows($activeCrowdSourceQuery);
											$status= "";
											   if ($activeCrowdSourceQueryNumRow !=0){
                                                    while($activeCrowd_s_Row = @mysql_fetch_assoc($activeCrowdSourceQuery)){
														 $activeCrowdSourceObject [] = $activeCrowd_s_Row;
														 $questionids= array();
														 $crowd_source_id= $activeCrowd_s_Row['crow_src_id'];												   
												 								
		                            ?> 
	<div class="col-md-12 col-sm-12 col-xs-12">  
			<div class="panel panel-back noti-box">
			                   <h1 class="">Crowd Source Name: <?php echo  $activeCrowd_s_Row['crow_src_name'];?></h1> 
							                           
									<?php
									
									                     $questionIdsQuery = mysql_query("SELECT quest_id FROM crowd_scr_quest WHERE crow_src_id= $crowd_source_id");
														 $questionIdsQueryNumRow = mysql_num_rows($questionIdsQuery);
															  
															   if ($questionIdsQueryNumRow != 0){
																	while($rowquestionids = mysql_fetch_assoc($questionIdsQuery)){
																		 $questionid= $rowquestionids['quest_id'];
																		 array_push($questionids,$questionid);
																	}
															   }
															   
															   
														  for($i =0 ; $i < count($questionids) ;$i++ ){
					   //array_push($total,$ids);
								   
														   $getQuestionDetailsQuery = mysql_query("SELECT * FROM question_tbl WHERE quest_id = $questionids[$i]");
														   $getQuestionDetailsQueryNumRow = mysql_num_rows( $getQuestionDetailsQuery);
								   
								        $a= $i;
										   if($getQuestionDetailsQueryNumRow != 0){
											     while($rowgetQuestionDetails = mysql_fetch_assoc($getQuestionDetailsQuery)){
																		
									 ?>  
                                <h3 class="panel-title">Question <?php echo $a+=1;; ?> : <?php echo  $rowgetQuestionDetails['quest_desc'];?> </h3>
								<button id= "active_question<?php  echo  $rowgetQuestionDetails['quest_id'];?>-<?php echo  $activeCrowd_s_Row['crow_src_id'];?>" onclick="viewProgress(<?php  echo  $rowgetQuestionDetails['quest_id'];?>, <?php echo  $activeCrowd_s_Row['crow_src_id'];?>)">View Progress</button>
								<div id="active-page-chart-container-question<?php echo  $rowgetQuestionDetails['quest_id']; ?>-<?php echo  $activeCrowd_s_Row['crow_src_id'];?>"></div>
								
								
								    <?php 
									  
									}
										}else{
											
											echo "not working quesion";
											//print_r($questionids);
											echo $crowd_source_id;
										}
										 
														  }
										?>
                   
               
            </div>
			</div>  
			                   <?php 
														  
													}
										}else{
											
											echo "not working";
										}
								     ?> 
                     
                        
<!--crowd source questions end--->
                </div>
                 <!-- /. ROW  -->
                <div class="row">
                    
                </div>     
                 <!-- /. ROW  -->           
    </div>
        <!-- /. PAGE INNER  -->
    </div>
        <!-- /. PAGE WRAPPER  -->
 <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/MooTools-Core-1.6.0.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
    <script src="js/morris/raphael-2.1.0.min.js"></script>
    <script src="js/morris/morris.js"></script>
	
	<script src="js/graphjs/fusioncharts.js"></script>
    <script src="js/graphjs/fusioncharts.charts.js"></script>
    <script src="js/graphjs/themes/fusioncharts.theme.zune.js"></script>

	 <script src="js_work/graphs/active_page_chart_data_donut.js"></script>	