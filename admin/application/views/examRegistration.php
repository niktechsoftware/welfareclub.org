                
                <div id="main-wrapper" class="container">
              <div align="center"> 
                    <div class="row">
                          
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                   <div id = "rahul"></div>
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Ragistration No</th>
                                                <th>Post</th>
                                                <th>Name</th>
                                                <th>Mobile No</th>
                                                <th>Branch No</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $res = $this->db->get("registration")->result();?>
                                        	<?php $i=1 ; foreach($res as $row):?>
                                                <?php if($row->status != "conformed"){ ?>
                                            <tr>
                                                <td>
                                                	<a 
                                                	href="#">
                                                		<?php echo $row->form_no;?>
                                                	</a>
                                                	<input type ="hidden" name ="rid<?php echo $i;?>" id="rid<?php echo $i;?>" value = "<?php echo $row->form_no; ?>" /> 
                                                </td>
                                                <td><?php echo $row->student_name_eng; ?></td>
                                                <td><?php echo $row->father_name; ?></td>
                                                <td><?php echo $row->mobile_number; ?></td>
                                                <td><?php echo $row->varg; ?></td>
                                              <?php if($row->status == "submitted"){ ?>  
                                                <td style="color: green"><?php echo $row->status; ?></td>
                                                <?php }
                                                else{ 
                                                	?><td style="color: red"><?php echo $row->status; ?></td>
                                              <?php } ?>                                               
                                                <td>
						<select class="status" id="submitp<?php echo $i;?>" <?php echo ($row->status) == "submitted"?'disabled':''; ?> >
						<option value="pending">Payment Pending</option>
						<option value="submitted">Payment submitted</option>
						</select></br>
						 <?php if($row->status == "submitted"){ ?>
						<a href="#">Download Admin Card</a>
						 <?php }?>				
					        </td>
                                            
                                            </tr>
                                            <script>
                                           $("#submitp<?php echo $i;?>").change(function(){
			var status = $("#submitp<?php echo $i;?>").val();
			
			var id = $("#rid<?php echo $i;?>").val();
			$.post("<?php echo site_url("apanel/updateRollNo") ?>",{status : status,id : id}, function(data){
			$("#rahul").html(data);
			window.location.reload(true);
				});
		});
                                            </script>
                                            <?php } ?>
                                            <?php $i++ ; endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->