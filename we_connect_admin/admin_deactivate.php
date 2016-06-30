<?php 

include('includes/header_details.php');
include "php_work/class/get_specific_admin_info.php"; 
	
   
?>



 <div id="page-wrapper" >
            <div id="page-inner">
<div class="row">
    <div class="col-lg-6">
         <input type="image" id="blah" src="img/find_user.png" class="user-image_profile" onclick="return false;">
<!--                            <input type="image" src="img/find_user.png" >-->
                            <div class=""><input type="file" name="photo" id="fileToUpload"></div>
  
<!--    <div class="col-lg-4">-->

         <table class="table-responsive panel-back noti-box profile_tbl">
           
            <tr>
                <td><label for="surname">Surname:</label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <label style="color:green;"> <?php  echo $admin_info['admin_Surname'];  ?></label> </td>
            </tr>
			
			<tr>
                <td><label for="surname">Employee Number</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <label style="color:green;"><?php  echo $admin_info['admin_emp_no'];  ?></label> </td>
            </tr>
			<tr>
                <td><label for="surname">Position</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <label style="color:green;"><?php  echo $admin_info['admin_role'];  ?></label></td>
            </tr>
            <tr>
                <td><label for="email">E-mail</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <label style="color:green;"><?php  echo $admin_info['admin_email'];  ?></label></td>
            </tr>
        </table>
		
		
        <table class="table-responsive panel-back noti-box profile_tbl">
            <tr>
         <h2 class="top_text">Change Admin Password</h2>
          
           
            <tr>
                <td><button class="adminDeactivate btn btn-danger">Deactivate This User</button></td>
            </tr>
            
        </table>
        
    </div>
</div>
     </div>
</div>




<?php include('includes/footer.php')?>