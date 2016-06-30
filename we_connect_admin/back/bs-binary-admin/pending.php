<?php include('includes/header.php');?>

        
<!-- /. NAV TOP  -->
<?php include('includes/side_nav.php');?> 
<!-- /. NAV SIDE  -->
        
        <div id="page-wrapper" >
            <div class="dim_background"></div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2><span class="fa fa-active"></span> Pending CrowdSource</h2>   
                        <h5> </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
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
			</div>
                 <!-- /. ROW  -->
                <hr />                
                <div class="row">
<!--                    table start   -->
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="panel panel-default">
                        <div class="panel-heading">
                           Pending Crowd Sources
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Crowd Source Name</th>
                                            <th>Crowd Source Description</th>
                                            <th>Date added</th>
                                             <th>Date Modified</th>
                                             <th>Control</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Service</td>
                                            <td>how is our customer service</td>
                                            <td>15/03/16</td>
                                            <td>23/03/16</td>
                                            <td><button class="btn" id="view">Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>100090</td>
                                            <td><button class="btn">Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>100090</td>
                                            <td><button class="btn">Edit</button></td>
                                        </tr>
                                      

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      
                    </div>
                    
<!--                    table ends    -->
<!--                    popup box-->
                    
                    <div class="hidden_editable_on_pending" hidden>
                     
                     <div class="panel panel-default">
                         <div class="panel-heading"><input type="text" value="Do you love barclays multiple choice?" class="edit_input"></div>
                      <div class="panel-body">
                          <table class="table table-striped table-bordered table-hover">
                          <tr><td>   
                          <input type="text" value="Yes, I do" class="edit_input_op"></td><td><button class="btn">edit</button></td>
                          </tr>
                           <tr>
                          <td><input type="text" value="No, I dont" class="edit_input_op"></td><td><button class="btn">edit</button></td></tr>
                          </table>
                      </div>
                         <div class="panel-heading"><h4><input type="text" value="What colour is best choose?" class="edit_input"></h4></div>
                      <div class="panel-body">
                          <div class="choose_img"> <img src="img/find_user.png"><button class="btn">edit</button></div>
                          <div class="choose_img"> <img src="img/find_user.png"><button class="btn">edit</button></div>
                          <div class="choose_img"><img src=""><button class="btn">add</button></div>
                      </div>
                         <div class="panel-heading"><h4><input type="text" value="Barclays is the best true/false" class="edit_input"></h4></div>
                      <div class="panel-body responsive">
                           <table class="table table-striped table-bordered table-hover">
                          <tr><td>   
                          <input type="text" value="True" class="edit_input_op"></td> <td><button class="btn">edit</button></td>
                          </tr>
                           <tr>
                          <td><input type="text" value="False" class="edit_input_op"></td> <td><button class="btn">edit</button></td></tr>
                          </table>
                      </div>
                          <div class="panel-heading"><h4><input type="text" value="Barclays is the best rate" class="edit_input"></h4></div>
                      <div class="panel-body responsive">
                           <table class="table table-striped table-bordered table-hover">
                          <tr><td>   
                          <input type="text" value="please rate me" class="edit_input_op"></td> <td><button class="btn">edit</button></td>
                          </tr>
                           <tr>
                               <td><img src="img/find_user.png"></td> <td><input type="file" class="file"></td></tr>
                          </table>
                      </div>
                        <div class="panel-footer clearfix">
                            <div class="pull-right">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Save |</button>
                                    <button type="button" class="btn btn-secondary">Post |</button>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
                    
<!--                    popup box-->
                    
                    
                    
                </div>
                 <!-- /. ROW  -->
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
<div class="black_overlay"></div>
     <!-- /. WRAPPER  -->
<script src="js/we_con_jquery.js"></script>
<?php include('includes/footer.php')?>
