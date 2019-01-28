                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Manage Special Batch Timing</h4>
                                </div>
                            	<div class="panel-body">
                            		<div class="col-md-7">
		                            	<?php if($this->uri->segment(3) == "edit"):?>
		                            	<?php $this->db->where("id",$this->uri->segment(4));?>
		                            	<?php $deta = $this->db->get("batch_time")->row();?>
		                                   <form class="form-horizontal" action="<?php echo base_url()?>allform/editBatchSpecial" method="post">
		                                        <div class="form-group">
		                                            <label for="input-Default" class="col-sm-6 control-label"><strong>Batch Timing</strong> (Like-05:30 PM - 07:30 PM)</label>
		                                            <div class="col-sm-6">
		                                            	<input type="hidden" value="<?php echo $this->uri->segment(4);?>" name="id">
		                                                <input type="text" class="form-control" value="<?php echo $deta->batch_time; ?>" id="input-Default" name="batch">
		                                            </div>
		                                        </div>
		                                         <div class="col-sm-offset-2 col-sm-10">
		                                            <button type="submit" class="btn btn-success">Edit Special Batch Time</button>
		                                         </div>
		                                    </form>
		                                <?php else:?>
		                                	<form class="form-horizontal" action="<?php echo base_url()?>allform/saveBatchSpecial" method="post">
		                                        <div class="form-group">
		                                            <label for="input-Default" class="col-sm-6 control-label"><strong>Batch Timing</strong> (Like-05:30 PM - 07:30 PM)</label>
		                                            <div class="col-sm-6">
		                                                <input type="text" class="form-control" id="input-Default" name="batch">
		                                            </div>
		                                        </div>
		                                         <div class="col-sm-offset-2 col-sm-10">
		                                            <button type="submit" class="btn btn-success">Save Special Batch Timing</button>
		                                         </div>
		                                    </form>
		                                <?php endif;?>
									</div>
									<div class="col-md-5">
										<table class="table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Batch Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $res = $this->db->get("batch_special")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td>
                                                	<?php echo $i; ?>
                                                </td>
                                                <td><?php echo $row->batch_time	; ?></td>
                                                <td>
                                                	<a href="<?php echo base_url();?>apanel/batchTimeSpecial/edit/<?php echo $row->id;?>">Edit</a> | 
                                                	<a href="<?php echo base_url();?>allform/deleteBatchSpecial/<?php echo $row->id;?>">Delete</a>
                                                </td>
                                            </tr>
                                            <?php $i++;?>
                                            <?php endforeach;?>
                                        </tbody>
                                       </table>  
									</div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->