                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                            	   <form method ="post" action ="<?php echo base_url();?>attenController/saveAttendance">
	                                <div class="panel-heading clearfix">
	                                    <h4 class="panel-title">Select Any One</h4>
	                                </div>
	                                <?php 
                                	$time=$this->db->get("batch_time")->result();
                                	$branch=$this->db->get("general_settings")->result();
                                	$course= $this->db->query("Select * from student_info group by courseApplied")->result();?>
                                  <div class="col-md-12">
                                  <?php 		if($v){
										?><div class="alert alert-success">
										<?php echo "Successfully Attendance Done";?></div><?php 
									}
									
									$v=0;?>
	                                   <div class="col-md-4">
		                                    <div class="btn-group m-b-sm">
	                                             
	                                             <select class="form-control m-b-sm" id ="instituteID" name = "instituteID">
	                                             <option value="empty">Select Institute Id</option>
                                                 <?php foreach($branch as $tm):?>
                                                 <option value = "<?php echo $tm->clinic_id;?>"><?php echo $tm->clinic_id;?></option>
                                                <?php endforeach;?>
		                                         </select>
		                                        </div>
	                                        </div>
	                                       <div class="col-md-4">
                                        		<div class="btn-group m-b-sm">
                                       		 <?php //$this->db->where();
                              			 // $time=$this->db->get("");?>
                                         
                                            <select class="form-control m-b-sm" id ="selectBatch" name ="selectBatch">
                                             <option value="empty">Select Batch</option>
	                                                 <?php foreach($time as $tm):?>
                                                 <option value = "<?php echo $tm->batch_time;?>"><?php echo $tm->batch_time;?></option>
                                                <?php endforeach;?>
		                                    </select>
                                       	 </div>
                                        </div>
                                        
                                         <?php // $this->db->where();
                               			// $time=$this->db->get("");?>
                                      <div class="col-md-4">
                                        <div class="btn-group m-b-sm">
                                       
	                                              <select class="form-control m-b-sm" id ="selectCourse" name ="selectCourse">
	                                               <option value="empty">Select Course</option>
	                                                 <?php foreach($course as $tm):?>
                                                 <option value = "<?php echo $tm->courseApplied;?>"><?php echo $tm->courseApplied;?></option>
                                                <?php endforeach;?>
		                                    </select>
                                            </div>
                                        </div>
                                	</div>
                                	 <div class="col-md-12">
                                	 	<div>
                                	 	</div>
                                	<div class="table-responsive">
											<table class="table table-striped table-hover" >
												<thead id="sample_rahul1">
													
												</thead>
												<tbody id=sample_rahul>
													
												</tbody>
											</table>
										</div> 
										<div id="sonu">
										<button type="submit">submit</button>
										</div>
									</div>	
                            	</form>
                            </div>
                        </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->