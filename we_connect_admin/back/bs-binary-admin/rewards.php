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
                        <h2 class="font_f">Rewards</h2>   
                        <h5 class="font_f">Rewards  </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                              <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Register New Service Provider</h2>

                </div>
                <div class="panel panel-back noti-box">
              
			  <fieldset class="form-group col-md-4">
                     <label for="exampleInputEmail1">Service Provider Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
               </fieldset>
				<fieldset class="form-group col-md-4">
                     <label for="exampleInputEmail1">Reward Type</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
               </fieldset>
			   <fieldset class="form-group col-md-4">
                     <label for="exampleInputEmail1">value</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
               </fieldset>
				<div class="control-group">
                    <label class="control-label" for="selectError">Select existing reward type:  </label>

                    
                        <select id="selectError" data-rel="chosen">
						    <option></option>
                            <option>Airtime</option>
                            <option>Bundles</option>
                            <option>Electricity</option>
                        </select>
                    
                </div><br />
			           <button type="button" class="btn btn-primary">Register</button>
				</div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row--> 
    <div class="panel panel-back noti-box">
            <div class="panel-heading">
                <h3 class="panel-title">Total Service providers<span class="badge">4</span></h3>
                
            </div>
                <table class="table table-bordered">
                    <tr>
                        <td class=""><h4></h4></td>
                        <td class=""><h4>Vodacom</h4></td>
                        <td><h4>MTN</h4></td>
                        <td><h4>CellC</h4></td>
                        <td><h4>Telkom</h4></td>
                    </tr>
                    <tr>
                        <td><h4>Airtime</h4></td><td>YES</td><td>YES</td><td>YES</td><td>NO</td>
                    </tr><tr>
                    <td><h4>Data</h4></td><td>YES</td><td>YES</td><td>YES</td><td>NO</td>
                    </tr><tr>
                    <td><h4>Electricity</h4></td><td>NO</td><td>NO</td><td>No</td><td>YES</td>
                    </tr>
                </table>            
    </div>
       
            <div class="panel panel-back noti-box">
            <div class="panel-heading">
                <h3 class="panel-title">Expenses per Crowd Source</h3>
                </div>
			<div class="control-group">
                    <label class="control-label" for="selectError">Select Crowd Source:  </label>

                        <select id="selectError" data-rel="chosen">
                            <option>crowd Source 1</option>
                            <option>crowd Source 2</option>
                            <option>crowd Source 3</option>
                        </select>
                    
                </div>   
                <table class="table table-bordered" class="col-lg-10">
                    <tr>
                        <td class=""><h4></h4></td>
                        <td class=""><h4>Vodacom</h4></td>
                        <td><h4>MTN</h4></td>
                        <td><h4>CellC</h4></td>
                        <td><h4>Telkom</h4></td>
                    </tr>
                    <tr>
                        <td><h4>Airtime Total</h4></td><td> 7000</td><td> 1000</td><td>8000</td><td>  </td>
                    </tr><tr>
                    <td><h4>Data Total</h4></td><td>4000  </td><td> 2000</td><td> 7000  </td><td> </td>
                    </tr><tr>
                    <td><h4>Electricity Total</h4></td><td> </td><td> </td><td> </td><td> 7000  </td>
                    </tr>
					<tr>
                    <td><h4>Grand Total </h4></td><td>11000 </td><td>3000 </td><td> 15000</td><td> 7000</td>
                    </tr>
					
					<tr>
                    <td><h4>Total Rand: </h4></td><td> R 11000</td><td> R 3000</td><td>R 15000 </td><td>R 7000</td>
                    </tr>
                </table>   
	
	</div>
                        
        	   
    <div class="panel panel-back noti-box">
            <div class="panel-heading">
                <h3 class="panel-title">Total Expense</h3>   
            </div> 
                <table class="table table-bordered" class="col-lg-10">
                    <tr>
                        <td class=""><h4></h4></td>
                        <td class=""><h4>Vodacom</h4></td>
                        <td><h4>MTN</h4></td>
                        <td><h4>CellC</h4></td>
                        <td><h4>Telkom</h4></td>
                    </tr>
                    <tr>
                        <td><h4>Airtime Total</h4></td><td> 50000</td><td> 64000</td><td>24000</td><td>  </td>
                    </tr><tr>
                    <td><h4>Data Total</h4></td><td>30000  </td><td> 15000</td><td> 18000  </td><td> </td>
                    </tr><tr>
                    <td><h4>Electricity Total</h4></td><td> </td><td> </td><td> </td><td> 90000  </td>
                    </tr>
					<tr>
                    <td><h4>Grand Total </h4></td><td>80000 </td><td>79000 </td><td> 32000</td><td> 50000</td>
                    </tr>
					
					<tr>
                    <td><h4>Total Rand: </h4></td><td> R 80000</td><td> R 79000</td><td>R 32000 </td><td>R 150000</td>
                    </tr>
                </table>
	</div>
                
                 <!-- /. ROW  -->
                
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
<?php include('includes/footer.php')?>
