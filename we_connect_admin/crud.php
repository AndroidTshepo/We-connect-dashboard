<?php include('includes/header.php');?>


<?php 

   include 'php_work/class/admin_class.php'; 

   // Show only compile error
	error_reporting(E_COMPILE_ERROR );

	$adminObj = new admin();
	$adminrecords = $adminObj->retrieve_all_admin();
  
    echo $adminrecords;
  

?>
<script>
	 var columns = new Array("fname","lname","tech","email","address");
	 var inputType = new Array("text","text","text","text","textarea");
	 var table = "allAdminInfoTable";
	 
	  // Set button class names 
	 var viewDetails = "viewDetails";
	 var changeLevel = "ChangeLevel";
	 var resetPass = "resetPass";
	 var DeactivateAdmin = "DeactivateAdmin";
	 

</script>



   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>      
<!-- /. NAV TOP  -->
<?php include('includes/side_nav.php');?> 
        
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
         <!-- admin_crowd_source_general_info.php-->
	<?php  include "includes/widgets/crud/admin_crowd_source_general_info.php";  ?>       
				<hr />
				
   <!--strat crud row-->             
  <div class="row">

        <!--/span-->

			<!-- including Crud label descriptions-->
			<?php  include "includes/widgets/crud/admin_crud_label_description.php";  ?>
			
			<!--  including Retrieve all admin info-->
			<?php  include "includes/widgets/crud/retrieve_all_admin.php";  ?>
			
			<!--  including Register admin-->
			<?php  include "includes/widgets/crud/register_admin.php";  ?>
			
			<!--   including Admin Activities log-->	
			<?php  include "includes/widgets/crud/admin_activities_log.php ";  ?>
			 <div id="chart-container">FusionCharts will render here</div>
			 <!--   including Admin crowd source log-->
			<?php  include "includes/widgets/crud/admin_crowd_source_log.php ";  ?>
		
  </div>
   <!--/end of row-->
            
        

    </div>  
<?php include('includes/footer.php')?>	
 <!--  including the js files --> 
<script src="js_work/crud/crud_class.js"></script>  
<script src="js_work/crud/crud_main.js"></script>  
