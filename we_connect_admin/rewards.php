
<?php include('includes/header.php');?>

     
<?php include('includes/side_nav.php');?> 

<div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="box col-md-12">
                    <div class="panel-back noti-box">
                            <h2 class="top_text"><i class="glyphicon glyphicon-user"></i> Register New Service Provider</h2>

                        <div class="box-content">

                      <fieldset class="form-group col-md-4">
                             <label for="exampleInputEmail1">Service Provider Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                       </fieldset>
                        <fieldset class="form-group col-md-4">
                             <label for="exampleInputEmail1">Reward Type</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                       </fieldset>
                       <fieldset class="form-group col-md-4">
                             <label for="exampleInputEmail1">Value</label>
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

                        </div><br/>
                               <button type="button" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>
        <!--/span-->
&nbsp;
            </div>
                <div class="panel-back noti-box">
                <h2 class="top_text">Total Service Providers</h2>
			
			
               
                    <div class="">
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
                </div>
            &nbdp;
       
            <div class="panel-back noti-box">
            
                <h2 class="top_text">Expenses Per Crowd Source</h2>
		
			<div class="control-group">
                    <label class="control-label" for="selectError">Select Crowd Source:  </label>
                        <select id="selectError" data-rel="chosen">
                            <option>crowd Source 1</option>
                            <option>crowd Source 2</option>
                            <option>crowd Source 3</option>
                        </select>
                    
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
&nbsp;                        
        	   
                  <div class="panel-back noti-box">
          
                <h2 class="top_text">Total Expense</h2>
 
                <div class="">
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
    
	           </div>
                </div>
<?php include('includes/footer.php')?>