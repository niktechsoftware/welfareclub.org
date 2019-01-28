                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <form class="form-horizontal" action="<?php echo base_url()?>allform/conformedEmployeeUpdate" method="post" enctype="multipart/form-data">
                                         
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Bank Name</label>
                                            <div class="col-sm-4">
                                             <input type="hidden" name="reg_no" value="<?php echo $info->registration_num;?>">
                                            	 <input class="form-control" type="text" name="bank_name" placeholder="Bank Name" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Account Number</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="account_no" placeholder="Account Number" required="required">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Bank Address</label>
                                            <div class="col-sm-4">
                                            	 <input class="form-control" type="text" name="bank_address" placeholder="Bank Address" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Ifsc Code</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="ifsc_code" placeholder="Ifsc Code" required="required">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Employee Id</label>
                                            <div class="col-sm-4">
                                            	 <input class="form-control" type="text" name="user_name" placeholder="User Name" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Login Password</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="password" name="password" placeholder="Password" required="required">
                                            </div>
                                        </div>
                                  
                                     
                                        
                                        <hr/>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                            	<input type="hidden" name="submitType" value="admin">
                                                <button type="submit" class="btn btn-success">Conformed Employee Bank Detail</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->