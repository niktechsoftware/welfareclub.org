                
                <div id="main-wrapper" class="container">
             
                    <div class="row">
                          
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Student ID</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Course Applied</th>
                                                <th>Batch No</th>
                                                <th>Batch Timing</th>
                                                <th>Branch</th>
                                                <th>Action</th>
                                                  
                                            </tr>
                                        </thead>
                                        <tbody>
                                  <?php 
		                             
		                              $s = $this->db->get('fee')->result();
		                             foreach($s as $t) {
			                         $rem =$t->remaing_fee;			                        
			                         if($rem == 0.00){
			                         ?>		<?php  $stuId = $t->student_id;?>
			                         		<?php $this->db->where("student_id",$stuId); ?>
                                        	<?php $res = $this->db->get("student_info")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td>
                                                	<a href="<?php echo base_url()?>apanel/printRegister/<?php echo $row->student_id; ?>/lkfjsaodif0w9809sodiuf4rifsd9f80w934oiwoifu">
                                                		<?php echo $row->student_id; ?>
                                                	</a>
                                                </td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->fName; ?></td>
                                                <td><?php echo $row->courseApplied; ?></td>
                                                <td><?php echo $row->branch_no; ?></td>
                                                <td><?php echo $row->timing; ?></td>
                                                <td><?php echo $row->branch_id; ?></td>                                                
                                            <td><a href="<?php echo base_url()?>allform/oldStudent/<?php echo $row->student_id; ?>/lkfjsaodif0w9809sodiuf4rifsd9">Make Old</a></td>
                                            </tr>
                                            <?php endforeach;?>
                                         <?php } ?>   
                                          <?php } ?>
                                        </tbody>
                                       
                                             
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->