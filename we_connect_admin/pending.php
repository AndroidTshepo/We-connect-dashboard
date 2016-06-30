<?php include('includes/header.php');?>

     
    <link rel="stylesheet" href="SimpleModal.css" type="text/css" media="screen" title="no title" charset="utf-8">   
<!-- /. NAV TOP  -->
<?php include('includes/side_nav.php');?> 
<?php include('php_work/class/get_all_crowd_source.php');?> 
<!-- /. NAV SIDE  -->
<script>
	 var columns = new Array("crowd_s_name","crowd_s_desc");
	 var inputType = new Array("text","textarea");
	 var placeholder = new Array("Edit crowd source name","Edit crowd source escription");
	 var table = "table";
	 
	  // Set button class names 
	 var viewdetailspendingbtn = "viewdetailspendingbtn";
	 var savebtn = "savebtn";
	 var deletebtn = "deletebtn";
	 var activatebtn = "activatebtn";
	 

</script>      
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="top_text"> Pending CrowdSource</h2>   
                        <h5> </h5>
                    </div>
                            
                 <!-- /. ROW  -->
                  <hr />
                <div class="black_overlay"></div>  		


			
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">120 New</p>
                    <p class="text-muted">Messages</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">30 Tasks</p>
                    <p class="text-muted">Remaining</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">240 New</p>
                    <p class="text-muted">Notifications</p>
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
			
                 <!-- /. ROW  -->
                <hr />   
               			   
                <?php include "includes/widgets/crowd_source/pending/crowd_s_pending.php";  ?>
                 <!-- /. ROW  -->
				 
				
				  </div>
                <div class="row"> 
                </div>
                 <!-- /. ROW  -->
                <div class="row" >
                </div>
                 <!-- /. ROW  -->
                <div class="row">
                    
                </div>     
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>

     <!-- /. WRAPPER  -->
<?php include('includes/footer.php')?>

<script src="js_work/crowd_source/crowd_source.js"></script>	

<script src="js_work/crowd_source/crowd_source_class.js"></script>

