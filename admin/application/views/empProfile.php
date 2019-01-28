<?php 
if(strlen($this->uri->segment(3)) > 0){
	$reg_no = $this->uri->segment(3);
}
$this->db->where("registration_num",$reg_no);
$profile = $this->db->get("registration")->row();
?>
                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <form class="form-horizontal" action="<?php echo base_url()?>allform/conformedEmployee.jsp" method="post">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Branch Name </label>
                                            <div class="col-sm-4">
                                                <label>
                                                	<strong>
                                                		<?php 
                                                			if(strlen($profile->branch_id) > 0){
                                                				echo $profile->branch_id;
                                                			}
                                                			else{ 
                                                				echo "N/A";
                                                			} 
                                                		?>
                                                	</strong>
                                                </label>
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Employee Name</label>
                                            <div class="col-sm-4">
                                                <label>
                                                	<strong>
                                                		<?php 
                                                			if(strlen($profile->name) > 0){
                                                				echo $profile->name;
                                                			}
                                                			else{ 
                                                				echo "N/A";
                                                			} 
                                                		?>
                                                	</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Post</label>
                                            <div class="col-sm-4">
                                                <label>
                                                	<strong>
                                                		<?php 
                                                			if(strlen($profile->post) > 0){
                                                				echo $profile->post;
                                                			}
                                                			else{ 
                                                				echo "N/A";
                                                			} 
                                                		?>
                                                	</strong>
                                                </label>
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Mobile Number</label>
                                            <div class="col-sm-4">
                                                <label>
                                                	<strong>
                                                		<?php 
                                                			if(strlen($profile->mobile_no_1) > 0){
                                                				echo $profile->mobile_no_1;
                                                			}
                                                			else{ 
                                                				echo "N/A";
                                                			} 
                                                		?>
                                                	</strong>
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Mobile Number 2</label>
                                            <div class="col-sm-4">
                                                <label>
                                                	<strong>
                                                		<?php 
                                                			if(strlen($profile->mobile_no_2) > 0){
                                                				echo $profile->mobile_no_2;
                                                			}
                                                			else{ 
                                                				echo "N/A";
                                                			} 
                                                		?>
                                                	</strong>
                                                </label>
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
                                            <div class="col-sm-4">
                                                <label>
                                                	<strong>
                                                		<?php 
                                                			if(strlen($profile->address) > 0){
                                                				echo $profile->address;
                                                			}
                                                			else{ 
                                                				echo "N/A";
                                                			} 
                                                		?>
                                                	</strong>
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Email Address</label>
                                            <div class="col-sm-4">
                                                <label>
                                                	<strong>
                                                		<?php 
                                                			if(strlen($profile->e_mail_id) > 0){
                                                				echo $profile->e_mail_id;
                                                			}
                                                			else{ 
                                                				echo "N/A";
                                                			} 
                                                		?>
                                                	</strong>
                                                </label>
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Head Name</label>
                                            <div class="col-sm-4">
                                                <label>
                                                	<strong>
                                                		<?php 
                                                			if(strlen($profile->city) > 0){
                                                				echo $profile->city;
                                                			}
                                                			else{ 
                                                				echo "N/A";
                                                			} 
                                                		?>
                                                	</strong>
                                                </label>
                                            </div>
                                        </div>
                                        
                              
                             
                                        <hr/>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                            	<input type="hidden" name="id" value="<?php echo $reg_no;?>">
                                                <button type="submit" class="btn btn-success">Conform Employee</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->