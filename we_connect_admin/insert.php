<?php include('includes/header.php');?>
<body>
    <div id="wrapper"  ng-app="productsTableApp" ng-controller="ProductsController">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">We-Connect</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>  
        
<!-- /. NAV TOP  -->
<?php include('includes/side_nav.php');?> 
<!-- /. NAV SIDE  -->
        
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="top_text"> Insert CrowdSource</h2>   
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
                    <h2 class="title top_text">Add Crowd Source Information</h2>
                
                    <p class="header">
                        Enter Crowd Source Name : 
                    </p>
                    <input type="text" name="crowdSourceName" id="crowdSourceName" onfocusout= "onfocusoutCrowdSourceName()">
                    <p class="header">
                        Enter Crowd Source description : 
                    </p>
                    <textarea class="form-control" name="crowdSourceDescription" id="crowdSourceDescription" onfocusout= "onfocusoutCrowdSourceDescription()"></textarea> 
                     <input type="hidden" id="addSectionCount" value="0" name="addSectionCount"> 
					 <input type="hidden" id="addOpSectionCount" value="0" name="addOpSectionCount">
					 
					<input type="submit" value="save crowdsource" class="btn btn-lg" id="saveCrowdSource" onclick= "onClickRegisterCrowdSource()"> 
                   <div id="modifyCrowdSource" hidden>
				        <button value="modify crowdsource" class="btn btn-lg" id="modifyCrowdSource" onclick= "onClickModifyCrowdSource()"> modify </button>
					<div>
                </div>
                </div>

				
				<div class="row">

                   <div class="selectquestions col-lg-6 " hidden>
                         <div class="col-lg-12">
                            <div class="text-box  panel  noti-box">
                                Select category : <br/>
                                <div class="btn-group" role="group" aria-label="...">
                              <button type="button" class="btn btn-default" onclick="addTrueFalseQuest()">True/False </button>
                              <button type="button" class="btn btn-default" onclick="multileChoiceQuestOne()">Multiple Choice One</button>
							  <button type="button" class="btn btn-default" onclick="multileChoiceQuestmultiple()">Multiple Choice Many</button>
                              <button type="button" class="btn btn-default" onclick="rateQuestText()">Rate Text</button>
							   <button type="button" class="btn btn-default" onclick="rateQuestImage()">Rate Image</button>
                              <button type="button" class="btn btn-default" onclick="chooseOnePictureQuest()">Choose One Pic</button>
							  <button type="button" class="btn btn-default" onclick="chooseManyPictureQuest()">Choose Many Pic</button>
                            </div>
                            </div>
                            
                        </div>
                </div>
</div>
</div>
<div class="row">

        <div class="col-lg-6">
		
		     <div  id="questionRow" >
                               <!--questions go here---> 
			</div>

 </div>
            </div>
    
<!--column for immulator-->   
<div class="row">                 
                <div class=" col-lg-3 col-md-offset-2 ">

                    <!--simulator-->
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
                            <div class="panel-heading">
                                <h3 class="panel-title">We-Connect</h3>
                            </div>
                          
<!--                          mysql select statement here to  display last record entered -->
                                
                            </div>
                            </div>
                            <div id="button">
                                <div id="buttonsquare"></div>
                            </div>
                            </div>
<!--iphone-->                                
                        </div>   
                </div>    
<!-- simulator end  --> 
    
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
<?php include('includes/footer.php')?>


<script src="js_work/crowd_source/crowd_source_class.js"></script>
<script src="js_work/crowd_source/question_class.js"></script>
<script src="js_work/crowd_source/option_class.js"></script>
<script src="js_work/crowd_source/crowd_source_ins.js"></script>