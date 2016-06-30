<?php include('includes/header.php');?>

        
<!-- /. NAV TOP  -->
<?php include('includes/side_nav.php');?> 
<?php include('php_work/getAllUsers.php');?> 
<!-- /. NAV SIDE  -->
        
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="top_text">Users</h2>   
                        <h5> </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-users"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">120 Total</p>
                    <p class="text-muted">users</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">30 Deactivated</p>
                    <p class="text-muted">Users</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">40 User</p>
                    <p class="text-muted">Fixes</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">3 User</p>
                    <p class="text-muted">Complaints</p>
                </div>
             </div>
		     </div>
			</div>
                 <!-- /. ROW  -->
                <hr />

 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default adv_tbl">
					
					    <div class="box-content">
							  <div class="control-group">
								<label class="control-label" for="selectError">Filter By:  </label>

								
									<select id="UsrFilterSelection" data-rel="chosen" >
										<option value="value">Location</option>
										<option value="value">Age</option>
									</select>
							</div>
					   </div>
					   
					    <div id="user-chart-container1"></div>
					   
					   
                        <div class="panel-heading">
                             User Information Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Surname</th>
                                            <th>Account number</th>
                                            <th>Location</th>
                                            <th>Telphone Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
		                                    if(is_array($records) || is_object($records)){
		                                          //$i = 1;	
											//echo $status;	
		                                     foreach($records as $eachRecord){
												 								
		                            ?> 
                                        <tr class="odd gradeX">
                                            <td><?php echo  $eachRecord['u_Fname'];?></td>
                                            <td><?php echo  $eachRecord['u_Lname'];?></td>
                                            <td><?php echo  $eachRecord['u_CardNo'];?></td>
                                            <td class="center"><?php echo  $eachRecord['u_city'];?></td>
                                            <td class="center"><?php echo  $eachRecord['u_TelNo'];?></td>
                                        </tr>
									 <?php }
										}else{
											print_r($records);
											echo "not working";
										}
								     ?> 
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
<?php include('includes/footer.php')?>

<script src="js_work/graphs/user_charts_data.js"></script>
