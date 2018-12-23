                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Enter Student Detail</h4>
                                </div>
                            	<div class="panel-body">
                                	<form class="form-horizontal" action="<?php echo base_url()?>apanelForms/saveSelectedStu" method="post" enctype="multipart/form-data">
                                        <?php $raj=$this->uri->segment(3);
                                        if($raj==23)
                                        {
                                        echo "Successfully Uploaded Image";
                                        	
                                        }?>
                                        
                                        
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Student Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="input-Default" name="title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Selected Student Image </label>
                                            <div class="col-sm-10">
                                            	<input type="file"  name="selectedStu" />
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-2 control-label">Selected Student Department </label>
                                            <div class="col-sm-10">
                                            	<input type="text"  name="department" />
                                            </div>
                                        </div>
                                         <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">Upload Photo</button>
                                         </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    </div>