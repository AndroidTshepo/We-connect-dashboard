<!-- retrieve All admins info -->
 <div class="row">
        <div class="box col-md-12 panel-back noti-box">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Admin Activities/Logs </h2>

                </div>
    <div class="alert alert-info"></div>
    <table class="allAdminInfoTable table-striped table-bordered bootstrap-datatable datatable responsive" >
    <thead>
    <tr>
        <th>Username</th>
        <th>Date registered</th>
        <th>Role</th>
		<th>Level</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
		if(count($adminrecords)){
		 $i = 1;	
		 echo "ookkkk";
		 foreach($adminrecords as $key=>$adminRecord){
		?>
    
    <tr id="<?php echo $adminRecord['id'];?>">
        <td><?php echo $adminRecord['admin_email'];?></td>
        <td class="center"><?php echo $adminRecord['admin_date_reg'];?></td>
        <td class="center"><?php echo $adminRecord['admin_role'];?></td>
		<td class="center"><?php echo $adminRecord['admin_level'];?></td>
        <td class="center">
            <span class="label-success label label-default"><?php
                if ($adminRecord['admin_status'] ==0){
					echo "Inactive";
				}else{
					echo "active";
				}          

			?></span>
        </td>
        <td class="center" >
            <a class="viewDetails btn btn-success" href="#" id="<?php echo $adminRecord['admin_id'];?>">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View details
            </a>
            <a class="ChangeLevel btn btn-info" href="#" id="<?php echo $adminRecord['admin_id'];?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Change Level
            </a>
            <a class="resetPass btn btn-info" href="#" id="<?php echo $adminRecord['admin_id'];?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Reset Pass
            </a>
            <a class="DeactivateAdmin btn btn-danger" href="#" id="<?php echo $adminRecord['admin_id'];?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Deactivate
            </a>
        </td>
    </tr>
	
	<?php }
		}
		?>
    </tbody>
    </table>
	 <ul class="pagination pagination-centered">
                        <li><a href="#">Prev</a></li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li><a href="#">2</a></li>
                        
                        <li><a href="#">Next</a></li>
                    </ul>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

	