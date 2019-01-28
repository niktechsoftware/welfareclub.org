<form method="post" action="<?php echo base_url();?>branchForm/save_form">
	<div id="main-wrapper" class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-white">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 panel-yellow">
								<label>Branch ID</label>
							</div>
							<div class="col-md-2">
								<input type="hidden" name="clinic_id" value="<?php echo $row->clinic_id;?>">
								<label><?php echo $row->clinic_id;?></label>
							</div>
							
							<div class="col-md-2 panel-yellow">
								<label>Branch Name</label>
							</div>
							<div class="col-md-2">
								<label><?php echo $row->cilnic_name;?></label>
							</div>
							<div class="col-md-2 panel-yellow">
								<label>Branch Type</label>
							</div>
							<div class="col-md-2">
								<label><?php echo $row->login_type;?></label>
							</div>
							
						</div>
						<hr/>
					<div class="row">
							<div class="col-md-2 panel-yellow">
								<label>Head Name</label>
							</div>
							<div class="col-md-2">
								<label><?php echo $row->head_name;?></label>
							</div>
							<div class="col-md-1 panel-yellow">
								<label>Address</label>
							</div>
							<div class="col-md-3">
								<label><?php echo $row->address_1." ".$row->address_1." ".$row->state."-".$row->pin;?></label>
							</div>
							<div class="col-md-2 panel-yellow">
								<label>Mobile Number</label>
							</div>
							<div class="col-md-2">
								<label><?php echo $row->phone_number;?></label>
							</div>
							
						</div>					
					
						<hr/>
						<div class="row">
							
							<div class="col-md-2">
								<label>No Of Form</label>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" name="noOfForm" id="nf">
							</div>							
							<div class="col-md-2">
								<label>Balance/Form</label>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" name="balancePerform" id="bf">
							</div>
							<div class="col-md-2">
								<label>Balance</label>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" name="fee" id="feePay12">
							</div>
							
						
						</div>
						
						
						<hr/>
						<div class="row">
							
							<div class="col-md-2">
								<label>Previous balance</label>
							</div>
						<?php $id = $this->uri->segment(3);
						$val1 = $this->db->query("SELECT previousBalance FROM branchform WHERE branchId = $id ORDER BY id DESC LIMIT 1")->row();?>
							<div class="col-md-2">
								<input type="text" class="form-control" id="pv" value="<?php if($val1){ echo $val1->previousBalance;}else{ echo "0.00";}?>" name="pBalance" disabled="disabled"   />
							</div>							
							<div class="col-md-2">
								<label>Total Bakance</label>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" name="tBalance" id="feePay11">
							</div>
							<div class="col-md-2">
								<label>Pay Balance</label>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" name="payBalance" id="pb">
							</div>
							
						
						</div>
						
						
						<hr/>
						<div class="row">
							
							<div class="col-md-2">
								<label>Due balance</label>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" name="dueBalance" id="feePay13">
							</div>							
							<div class="col-md-2">
								<label>Recieved By</label>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" name="recievedBy" >
							</div>
							<div class="col-md-2">
								<label>Date</label>
							</div>
							<div class="col-md-2">
								<input type="date" class="form-control" name="issueDate" value="<?php echo date("Y-m-d");?>">
							</div>
							
						
						</div>
						
						
						<hr/>
						<div class="row">
							<div class="col-md-2">
								<button class="btn btn-success" type="submit">Save & Print</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Row -->
	</div><!-- Main Wrapper -->
	</form>
