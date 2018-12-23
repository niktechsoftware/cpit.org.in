                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Enter Notice Containt and Title</h4>
                                </div>
                            	<div class="panel-body">
                                	<form class="form-horizontal" action="<?php echo base_url();?>sms/batchWise" method="post">
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Select Branch</label>
                                            <div class="col-sm-4">
                                                <select class="form-control" id="branchid" name="branch">
                                                		<option value="">-Select Branch-</option>
                                                	<?php foreach($branch as $row):?>
                                                		<option value="<?php echo $row->clinic_id?>"><?php echo $row->cilnic_name?> (<?php echo $row->clinic_id?>)</option>
                                                	<?php endforeach;?>
                                                </select>
                                            </div>
                                            <label for="input-Default" class="col-sm-2 control-label">Select Batch</label>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="batch" id="batch"></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">SMS Content</label>
                                            <div class="col-sm-10">
                                            	<textarea rows="6" cols="60" class="form-control" name="msg" ></textarea>
                                            </div>
                                        </div>
                                         <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">Send SMS</button>
                                         </div>
                                    </form>  
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    
                </div><!-- Main Wrapper -->