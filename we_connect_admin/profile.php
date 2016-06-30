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
        
        <table class="table-responsive panel-back noti-box profile_tbl">
             <tr>
                <td>   <label for="username">First Name</label><input type="text" name="username" class="form-control" value="<?php  echo $admin_info['admin_Fname'];  ?>"></td>
            </tr>
			<tr>
                <td>   <label for="username">Last Name</label><input type="text" name="username" class="form-control" value="<?php  echo $admin_info['admin_Lname'];  ?>"></td>
            </tr>
           
            <tr>
                <td><label for="surname">Surname</label><input type="text" name="surname" class="form-control" value="<?php  echo $admin_info['admin_Surname'];  ?>"></td>
            </tr>
			
			<tr>
                <td><label for="surname">Employee Number</label><input type="text" name="surname" class="form-control" value="<?php  echo $admin_info['admin_emp_no'];  ?>"></td>
            </tr>
			<tr>
                <td><label for="surname">Date Registered</label><input type="text" name="surname" class="form-control" value="<?php  echo $admin_info['admin_date_reg'];  ?>"></td>
            </tr>
            <tr>
                <td><label for="email">E-mail</label><input type="text" name="email" class="form-control" value="<?php  echo $admin_info['admin_email'];  ?>""></td>
            </tr>
           <tr>
               <td> <button class="btn btn-success">Update Details</button>
                </td>
            </tr>
        </table> 
<!--</div>      -->
<!--    <div class="col-lg-4">-->
        <table class="table-responsive panel-back noti-box profile_tbl">
            <tr>
         <h2 class="top_text">Change your Password </h2>
          <?php
		  
		  ?>
            <tr>
                <td><label for="old_password">Old Password</label><input type="text" name="old_password" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="new_password">New Password</label><input type="password" name="new_password" class="form-control"></td>
            </tr>
            <tr>
                <td> <label for="confirm_password">Confirm Password</label><input type="password" name="confirm_password" class="form-control"></td>
            </tr>
            <tr>
                <td><button class="btn btn-warning">Change Password</button></td>
            </tr>
            
        </table>
        
    </div>
</div>
     </div>
</div>




<?php include('includes/footer.php')?>