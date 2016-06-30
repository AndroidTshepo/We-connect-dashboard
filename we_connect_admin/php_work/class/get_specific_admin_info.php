<?php 


include "php_work/class/admin_class.php";
  If(isset($_GET['admin_id'])){
	               echo $_GET['admin_id'];
	               $adminObjt = new admin(); 
                   $admin_info = $adminObjt->retrieve_specific_admin($_GET['admin_id']);
				   
  }else{
	  echo "not posted";
  }
		
   
?>