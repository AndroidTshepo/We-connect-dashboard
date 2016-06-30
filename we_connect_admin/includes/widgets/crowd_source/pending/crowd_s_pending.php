

                 
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
											<th>ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
		                                    if(is_array($records) || is_object($records)){
		                                          $i = 1;	
												
		                                     foreach($records as $eachRecord){
												 								
		                            ?>     
                                        <tr id="<?php echo  $eachRecord['crow_src_id'];?>">
										    <td id="<?php echo  $eachRecord['crow_src_id'];?>" class="crow_src_id"><?php echo  $eachRecord['crow_src_id'];?></td>
                                            <td id="<?php echo  $eachRecord['crow_src_id'];?>" class="crow_src_name"><?php echo  $eachRecord['crow_src_name'];?></td>
                                            <td id="<?php echo  $eachRecord['crow_src_id'];?>" class="crow_src_desc"><?php echo  $eachRecord['crow_src_desc'];?></td>
                                         
											<td><a href="#" class="savebtn btn btn-primary btn-sm" id="<?php echo  $eachRecord['crow_src_id'];?>" >Save</a>
                                                <a href="#" class="activatebtn btn btn-success btn-sm" id="<?php echo  $eachRecord['crow_src_id'];?>">Activate</a>
												<a href="#" class="deletebtn btn btn-danger" id="<?php echo  $eachRecord['crow_src_id'];?>">Delete</a>
												<a href="#" class="viewdetailspendingbtn btn btn-warning btn-sm" id="<?php echo  $eachRecord['crow_src_id'];?>">View Details</a></td>
                                        </tr>
                                     <?php }
										}else{
											
											echo "not working";
										}
								     ?>   

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      
                    </div>
                    
<!--                    table ends    -->
