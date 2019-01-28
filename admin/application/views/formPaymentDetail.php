                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                            	<th>#</th>
                                            	<th>Branch Id</th>
                                            	<th>Head Name</th>
                                                <th>Due Balance</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1; foreach($payment->result() as $row):
                                        	?>
                                            <tr>
                                            	<td><?php echo $i; ?></td>
                                                <td>
                                                	
                                                		<?php echo $row->branchId; $bi=$row->branchId; ?>
                                                	</a>
                                                </td>
                                                <?php $vp= $this->db->query("SELECT * FROM branchform where branchId='$bi' ORDER BY id DESC LIMIT 1")->row();
                                                $this->db->where("clinic_id",$bi);
                                              $vs=  $this->db->get("general_settings")->row(); ?>
                                                    <td><?php echo $vs->head_name;?></td>                                          
                                                <td><?php echo $vp->previousBalance; ?></td>
                                               <td><?php echo $vp->date; ?></td>
                                            </tr>
                                            <?php $i++; endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->