<?php include('includes/header.php');?>

<!-- /. NAV TOP  -->
<?php   include('includes/side_nav.php');
        include('classes/dashboard_class.php');
    
            $users = new dash_user_data();
            $users -> users(); 
            $crowd_sources = new dash_user_data();
            $crowd_sources -> crowdsources();

?>
<!-- /. NAV SIDE  -->
        
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 class="top_text">Admin Dashboard</h2>   
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
                    <p class="main-text"><?php echo $users -> users();?></p>
                    <p class="text-muted">Resgistered Users</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">0</p>
                    <p class="text-muted">CrouwdSources</p>
                </div>
             </div>
		     </div>
                   
                   
     
			</div>
                 <!-- /. ROW  -->
                <hr />                
                <div class="row">
                    
                  
                        
        </div>
                 <!-- /. ROW  -->
                <div class="row"> 
                      
              
                
                </div>
                 <!-- /. ROW  -->
                
                 <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                   
                    <div id="crowd-source-index-chart-container"></div>
                    
                </div>
				
				
                    <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="panel panel-default">
								
                        <div class="panel-heading">
                           Frequent Participants
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                             <th>User No.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>100090</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>100090</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>100090</td>
                                        </tr>
                                      

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      
                    </div>
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

	 <script src="js_work/graphs/crowd_source_chart_data_general.js"></script>