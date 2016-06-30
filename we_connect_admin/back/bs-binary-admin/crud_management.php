<?php include('includes/header.php');?>

        
<!-- /. NAV TOP  -->
<?php include('includes/side_nav.php');?> 
<!-- /. NAV SIDE  -->
        
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2><span class="fa fa-users"></span> Users</h2>   
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
			</div>
                 <!-- /. ROW  -->
                <hr />
                
                <div class="row">
        <div class="box col-md-12 panel-back noti-box">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-th"></i> Crowd Source CRUD Management</h2>
                </div>
                <div class="box-content panel-back noti-box">
                    <div class="row">
                        <div class="col-md-3">
						   <h6>Admin Level 1</h6>
						        <ul> 
								    <li> <span class="label-success label label-default">Create</span></li>
									  <li> <span class="label-default label">Read</span></li>
									  <li> <span class="label-warning label label-default">Update</span></li>
									  <li> <span class="label-default label label-danger">Delete</span></li>
								</ul>
								
						</div>
                        <div class="col-md-3">
						    <h6>Admin Level 2</h6>
							     <ul> 
								    <li> <span class="label-success label label-default">Create</span></li>
									  <li> <span class="label-default label">Read</span></li>
									  <li> <span class="label-warning label label-default">Update</span></li>
								</ul>
							
							</div>
                        <div class="col-md-3">
						    <h6>Admin Level 3</h6>
							    <ul> 
								    <li> <span class="label-success label label-default">Create</span></li>
									  <li> <span class="label-default label">Read</span></li>
								</ul>
					    </div>
						<div class="col-md-3">
						    <h6>Admin Level 4</h6>
							    <ul> 
									  <li> <span class="label-default label">Read</span></li>
								</ul>
					    </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/span-->
    </div><!--/row-->
///////
	
	<!-- Retrieve all admin info-->
	<?php // include "includes/widgets/crowd_source/crud/retrieve_all_admin.php";  ?>
	
     <div class="row">
        <div class="box col-md-12 panel-back noti-box">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Register New Admin</h2>

                </div>
                <div class="box-content">
              
			  <div class="input-group col-md-4">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
					<input type="text" class="form-control" placeholder="employee email" id="admin_reg_email">
                </div>
				
				<div class="input-group col-md-4">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
					<input type="text" class="form-control" placeholder="employee Number">
                </div>
				<div class="control-group">
                    <label class="control-label" for="selectError">Select Clearance:  </label>

                    
                        <select id="selectError" data-rel="chosen">
                            <option>Level 1</option>
                            <option>Level 2</option>
                            <option>Level 3</option>
                            <option>Level 4</option>
                        </select>
                    
                </div><br />
			           <button type="button" class="btn btn-primary">Register Admin</button>
				</div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
  
  

     <div class="row">
        <div class="box col-md-12 panel-back noti-box">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Admin Activities/Logs </h2>

                </div>
                <div class="box-content">
               
			      <div class="control-group">
                    <label class="control-label" for="selectError">Filter By:  </label>

                    
                        <select id="selectError" data-rel="chosen">
                            <option>Login attempts</option>
                            <option>Crowd Source</option>
                            <option> Rewards</option>
                            <option> CRUD Management</option>
                        </select>
                </div>
			   
				</div>
				
				
				<div id="loginAttemptsLogs" >
				     <h3> LOGIN ATTEMPTS LOG</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Email</th>
                            <th>Last Fail</th>
                            <th>Last success</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>trinite@gmail.com</td>
                            <td class="center">
                                <span class="label-default label label-default">2016/01/01</span>
                            </td>
							<td class="center">
                                <span class="label-success label label-default">2016/01/01</span>
                            </td>
                        </tr>
                        <tr>
                            <td>tshepo@gmail.com</td>
                            <td class="center">
                                <span class="label-default label label-default">2016/01/01</span>
                            </td>
							<td class="center">
                                <span class="label-success label label-default">2012/01/01</span>
                            </td>
                        </tr>
                        <tr>
                            <td>cecilia@gmail.com</td>
                            <td class="center">
                                <span class="label-default label label-default">2016/01/01</span>
                            </td>
							<td class="center">
                                <span class="label-success label label-default">2016/01/01</span>
                            </td>
                        </tr>
                       
                        </tbody>
                    </table>
                    <ul class="pagination pagination-centered">
                        <li><a href="#">Prev</a></li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
         </div>
                </div>
         <div class="row">
        <div class="box col-md-12 panel-back noti-box">
			   <div id="crowd_source">
			        <h3> CROWD SOURCE LOG</h3>
				
				
				<div id="crowdSourcingLogs" >
                    <table class="table">
                        <thead>
                        <tr>
						    <th>Admin Name</th>
                            <th>Crowd Source Name</th>
                            <th>Actions</th>
                            <th>Date</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
						    <td> <a href='#'>Trinite</a></td>
                            <td> <a href='#'>Barclays support</a></td>
                            <td class="center">
                                <span class="label-success label label-default">Create</span>
									   <span class="label-default label">Read</span>
									 <span class="label-warning label label-default">Update</span>
									  <span class="label-default label label-danger">Delete</span>
                            </td>
							<td class="center">
                                <span class="label-success label label-default">2012/01/01</span>
                            </td>
                        </tr>
                        <tr>
						    <td> <a href='#'>Tsepo</a></td>
                            <td><a href='#'>Customer Services</a></td>
                            <td class="center">
									  <span class="label-default label label-danger">Delete</span>
                            </td>
							<td class="center">
                                <span class="label-success label label-default">2012/01/01</span>
                            </td>
                        </tr>
                        <tr>
						    <td> <a href='#'>Vu</a></td>
                            <td> <a href='#'>blahhhhhhhhhhh</a></td>
                            <td class="center">
									   <span class="label-default label">Read</span>
                            </td>
							<td class="center">
                                <span class="label-success label label-default">2012/01/01</span>
                            </td>
                        </tr>
                        
                       
									  
                        </tbody>
                    </table>
                    <ul class="pagination pagination-centered">
                        <li><a href="#">Prev</a></li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            
			   </div>
			
			</div>
        </div>
            </div>
            
        <!--/span-->

    </div>  