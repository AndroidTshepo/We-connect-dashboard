<?php include('includes/header.php');?>
<body>
<!--    <div id="wrapper"  ng-app="productsTableApp" ng-controller="ProductsController">-->
<!-- /. NAV TOP  -->
<?php include('includes/side_nav.php');?> 
<!-- /. NAV SIDE  -->
        
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2><span class="fa fa-upload"></span> Insert CrowdSource</h2>   
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
<!--add crowd source details-->
                <div class="col-lg-6 text-box panel panel-back noti-box">
                    <form action="classes/insert_class.php" method="POST">
                    <h3 class="title">Add crowd source information</h3>
                
                    <p class="header">
                        Enter Crowd Source Name : 
                    </p>
                    <input class="form-control" type="text" name="crowdSourceName">
              
                    <p class="header">
                        Enter Crowd Source description : 
                    </p>
                    <textarea class="form-control" name="crowdSourceDesc"></textarea>
              
                <input type="submit" name="load_cs" value="Load" class="btn btn-lg" id="load_question_temp">
                    </form>
                </div>
<!--add crowd source details end-->
      
<!--                </div>-->
<!--column for immulator-->                    
                <div class=" col-lg-3 col-md-offset-2 ">

                    <!--simulator--->
                        <div class="col-lg-6">
                        <h3 class="page-header">simulator</h3>
            <!--iphone-->
                            <div id="case" class="">
                            <div id="earsection">
                                <div id="camera"></div>
                                <div id="speaker"></div>
                            </div>
                            <div id="screen">
                        <div class="panel panel-default panel_cost">
                                <!---eg tru/fals-->
                                
                            <div class="panel-heading">
                                <h3 class="panel-title">We-Connect</h3>
                            </div>
                             <div id="tf" class="tf" hidden>
                                <div class="jumbotron jumbotron_sim">
                                <h3 class="label label-primary">{{qst}}</h3>
                                    <p>JSON data: <br/>{{data}}
                            </p>
                                </div>
                                <input type="radio" name="tf"> : <label id="l">{{op1}}</label><br/><br>
                                <input type="radio" name="tf"> : <label id="l1">{{op2}}</label>
                             
                                <div class="panel-footer clearfix footer_down">
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default">Back</a>
                                        <a href="#" class="btn btn-primary">Next</a>
                                    </div>
                                </div>
                             </div>
                                <!---eg tru/fals-->
                    <!---multiple choice-->
                            
                             <div id="mult" class="mult"  hidden>
                                <div class="jumbotron jumbotron_sim">
                                <h3 class="label label-primary">{{qst}}</h3>
                                </div>
                                <input type="radio" name="tf"> : <label id="l">{{op1}}</label><br/><br>
                                <input type="radio" name="tf"> : <label id="l1">{{op2}}</label>
                             
                                <div class="panel-footer clearfix footer_down">
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default">Back</a>
                                        <a href="#" class="btn btn-primary">Next</a>
                                    </div>
                                </div>
                             </div>
                    <!---multiple choice end-->           
                    <!---choose img-->                                
                             <div id="choose" class="choose"  >
                                <div class="title header">
                                    <label class="label label-primary ">true/false</label>
                                <h4 class="sim_quest">{{question}}</h4>
                                    <p>{{field.en}}<br/>
                            </p>
                                </div>
                                <div class="panel-footer clearfix footer_down">
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default">Back</a>
                                        <a href="#" class="btn btn-primary">Next</a>
                                    </div>
                                </div>
                             </div>
                    <!---choose img end-->           
                                
                            </div>
                                </div>
                            <div id="button">
                                <div id="buttonsquare"></div>
                            </div>
                            </div>
            <!--iphone-->                
                                        
                        </div>
                     
<!--simulator end--->
                </div>
<!--column for immulator end-->
                    
<!--                <div class="row">-->
                    
                       
                       <div class=""><h1></h1></div>
<!--question-->                       
                    
                    <div class="col-lg-6 questions">
                         <div class="col-lg-12">
                            <div class="text-box  panel  noti-box">
                                Select category : <br/>
                                    <input type ="radio" name="cartegory" class="truefalse" value="truefalse"> True/False |
                                    <input type ="radio" name="cartegory" class="multiplechoice" value="multiplechoice"> Multiple choice |
                                    <input type ="radio" name="cartegory" class="rate" value="rate"> Rate |
                                    <input type ="radio" name="cartegory" class="choose" value="choose"> Choose |
                            </div>
                             </div>
                    </div>
                     <div class="col-lg-6">
<!--panel to edit question and options for multiplechoice-->
            <div class="multiplechoice_holder" hidden>
                <form action="insert_data.php" method="post">
                    <div class="panel panel-default pe">
                        <div class="panel-heading">
                            <h3 class="panel-title"><input type="text" class="text" name="quest" placeholder="HOW IS OUR SERVICE" ></h3>
                        </div>
                        <div id="edit-multi" class="panel_for_multiple">    
                               <div ng-app="myApp" ng-controller="MainCtrl" class="section">
                                    <addbuttonsbutton></addbuttonsbutton>
                                    <div id="space-for-buttons"></div>
                               </div>

                            <div class="panel-footer clearfix">
                                <div class="pull-right">
                                <input type="button" class="btn btn-default" id="saveCS" value="Save"><input type="submit" name="sub" class="btn" id="nextQ" value="Next" >
                                </div>
                            </div>
                        </div>    
                    </div>
                </form>
            </div>                 
                        
                
<!--panel to edit question and options end-->
                       
<!--panel to edit question and options for choose-->
            <div class="choose_holder" hidden>
                <form action="insert_data.php" method="post" enctype="multipart/form-data">
                    <div class="panel panel-default pe">
                        <div class="panel-heading">
                            <h3 class="panel-title"><input type="text" name="quest" class="text" placeholder="ask and add a question" ></h3>
                        </div>
                        <div id="edit-multi" class="panel_for_multiple">    
                               
<!--                            <div class="up_img"><img src="img/find_user.png"></div> -->
                            <input type="image" id="blah" src="img/find_user.png" class="up_img" onclick="return false;">
<!--                            <input type="image" src="img/find_user.png" >-->
                            <div class=""><input type="file" name="photo" id="fileToUpload"></div>
                            

                            <div class="panel-footer clearfix">
                                <div class="pull-right">
                                <input type="button" class="btn btn-default" id="saveCS" value="Save"><input type="submit" name="sub" class="btn" id="nextQ" value="Next" >
                                </div>
                            </div>
                        </div>    
                    </div>
                </form>
            </div>                 
                        
<!--panel to edit question and options for choose end-->
<!--panel to edit question and options for true/false-->
            <div class="true_holder" hidden>
                <form action="classes/insert_class.php" method="POST">
                    <div class="panel panel-default pe">
                       
                        <div class="panel-heading">
                            <h3 class="panel-title"><input type="text" name="tf_question" class="text" placeholder="ask and add a question" ></h3>
                        </div>
                        <div id="edit-multi" class="panel_for_multiple">    
                             <input type="text" class="text" name="tf_op" placeholder="true" ><br>
                         
                             <input type="text" class="text" name="tf_op2" placeholder="false" >

                            <div class="panel-footer clearfix">
                                <div class="pull-right">
                                <input type="button" class="btn btn-default" id="saveCS" value="Save"><input type="submit" name="subfortf" class="btn" id="nextQ" value="done" >
                                </div>
                            </div>
                        </div>    
                    </div>
                </form>
            </div>                 
                        
<!--panel to edit question and options for true false end-->
<!--panel to edit question and options for rate-->
            <div class="rate_holder" hidden>
                <form action="insert_data.php" method="post">
                    <div class="panel panel-default pe">
                        <div class="panel-heading">
                            <h3 class="panel-title"><input type="text" name="quest" class="text" placeholder="ask and add a question" ></h3>
                        </div>
                        <div id="edit-multi" class="panel_for_multiple"> 
                            
                             <input type="image" id="blah2" src="img/find_user.png" class="up_img" onclick="return false;">
                            <div class=""><input type="file" name="photo" id="fileToUploadrate"></div>
                            <div>
                                <input type="text" class="text" name="quest" placeholder="we provide quality service" ></div>
                            <div class="panel-footer clearfix">
                                <div class="pull-right">
                                <input type="button" class="btn btn-default" id="saveCS" value="Save"><input type="submit" name="sub" class="btn" id="nextQ" value="Next" >
                                </div>
                            </div>
                        </div>    
                    </div>
                </form>
            </div>                 
                        
<!--panel to edit question and options for rate end-->
                    
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
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
<?php include('includes/footer.php')?>
