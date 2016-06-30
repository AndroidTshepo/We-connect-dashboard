<?php 
session_start();
        $sess_user_email = $_SESSION["user_email"];
        $sess_user_id = $_SESSION["unique_identity"];
// echo "Session .".$_SESSION["unique_identity"]." ".$_SESSION["user_email"];
if(!isset($_SESSION["user_email"])){
    echo "no session set";
    header('Location:login.php?access denied');
    exit;
}elseif(isset($_SESSION["user_email"])){
    
}

include('includes/header.php');?>

<!-- /. NAV TOP  -->
<?php   include('includes/side_nav.php');
        include('classes/dashboard_class.php');
    
            $users = new dash_user_data();
            $users -> users(); 
            $crowd_sources = new dash_user_data();
            $crowd_sources -> crowdsources();
            $live_crowd_source = new dash_user_data();
            $pending_crowdsource = new dash_user_data();
            

?>
<!-- /. NAV SIDE  -->
        
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome <?php ?></h5>
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
                    <p class="main-text"><?php echo  $crowd_sources -> crowdsources();?> Completed</p>
                    <p class="text-muted">CrouwdSources</p>
                </div>
             </div>
		     </div>
<!--                  active crowd source link-->
                    <div class="col-md-3 col-sm-12 col-xs-12 ">
        
                     <div class="panel panel-back noti-box" onclick="parent.location='active.php'">
                        <span class="icon-box bg-color-green set-icon">
                            <i class="fa fa-desktop"></i>
                        </span>
                        <div class="text-box" >
                            <p class="main-text">Active</p>
                            <p class="text-muted"><?php echo $live_crowd_source -> livecrowdsource();?></p>
                        </div>
                    </div>
                  </div>
                    
                    
<!--                    active crowd source link end-->
                    
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">3 </p>
                    <p class="text-muted">is a Popular Reward</p>
                </div>
             </div>
		     </div>
     
			</div>
                 <!-- /. ROW  -->
                <hr />                
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue">
                    <i class="fa fa-calendar"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Calender </p>
        
                    
      </div>               
            </div>
             </div>
		  
                    
                    
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; SPEED</strong>
                             <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing sit ametsit amet elit ftr. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                       
                    </div>
                
                        
        </div>
                 <!-- /. ROW  -->
                <div class="row"> 
                      
                <div class="col-md-9 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Live CrowdSource
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>            
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">                       
                    
                    <div class="panel panel-primary text-center no-boder bg-color-red">
                        <div class="panel-body">
                            <i class="fa fa-edit fa-5x"></i>
                            <h3><?php echo $pending_crowdsource ->pending_crowdsource();?> </h3>
                        </div>
                        <div class="panel-footer back-footer-red">
                            CrowdSources Pending
                            
                        </div>
                    </div>                         
                </div>
                
                </div>
                 <!-- /. ROW  -->
                
                 <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                   
                    <div class="chat-panel panel panel-default chat-boder chat-panel-head" >
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Twitter Feeds
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i>Refresh
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <ul class="chat-box">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="assets/img/1.png" alt="User" class="img-circle" />
                                    </span>
                                    <div class="chat-body">                                        
                                            <strong >Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>12 mins ago
                                            </small>                                      
                                        <p>
                                            Barclays might be leaving South Africa soon.#goodbye
                                        </p>
                                    </div>
                                </li>                            
                            </ul>
                        </div>

                    </div>
                    
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
        
<?php include('includes/footer.php')?>
