<?php include('includes/header.php');?>

        
<!-- /. NAV TOP  -->
<?php include('includes/side_nav.php');?> 
<!-- /. NAV SIDE  -->
        
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="top_text">General Crowd Sources Statistics</h1>   
                        <h5> </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">120 </p>
                    <p class="text-muted">Completed</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-users"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">11130 Total</p>
                    <p class="text-muted">Participants</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">240 Pending</p>
                    <p class="text-muted">Crowd Sources</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">3 Orders</p>
                    <p class="text-muted">Pending</p>
                </div>
             </div>
		     </div>
			</div>
                 <!-- /. ROW  -->
                <hr />     
                 
                <div class="row">
                    <div class="col-lg-12 ">
                       <div class="col-lg-12 panel-back noti-box">
                <table class="table table-bordered">
                    <tr>
                        <td class=""><h4>Crowd Source Name</h4></td>
                        <td><h4>Description</h4></td>
                        <td><h4>Number of Questions</h4></td>
                        <td><h4>Participated</h4></td>
                    </tr>
                    <tr>
                        <td>Trinite</td><td>about Tri</td><td>3</td><td>No</td>
                    </tr><tr>
                        <td>Tshepo</td><td>about T</td><td>8</td><td>Yes</td>
                    </tr><tr>
                        <td>Ceci</td><td>about C</td><td>4</td><td>No</td>
                    </tr><tr>
                        <td>Vic</td><td>about V</td><td>5</td><td>Yes</td>
                    </tr><tr>
                        <td>Nhlanhla</td><td>about N</td><td>5</td><td>Yes</td>
                    </tr>
                </table>
                </div> 
                </div>
       
        &nbsp;
<!--this is a div for status--->          
                <div class="col-lg-6">
                            &nbsp;
                <div id="piechart_3d" width="100%"></div>
                            &nbsp;
                <div id="donutchart" ></div>
                    
                </div>  

<!--  column chart                  -->
                <div class="col-lg-6">
                    <div id="columnchart_values"></div>
                            &nbsp;
                    <div id="chart_div" ></div>
                    
                </div>          
                        
      
  <!-- /. ROW  -->
                </div>
              
            </div>
  <!-- /. PAGE INNER  -->            

     <!-- /. WRAPPER  -->
 <script src="js/Chart.js"></script>
<?php include('includes/footer.php')?>
