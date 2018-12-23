                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Manage Course</h4>
                                </div>
                            	<div class="panel-body">
                            		<div class="row">
	                            		<div class="col-md-12">
			                            	<?php if($this->uri->segment(3) == "edit"):?>
			                            	<?php $this->db->where("id",$this->uri->segment(4));?>
			                            	<?php $deta = $this->db->get("courses")->row();?>
			                                   <form class="form-horizontal" action="<?php echo base_url()?>allform/editCourse" method="post">
			                                        <div class="form-group">
			                                            <label class="col-sm-2 control-label"><strong>Course Name</strong></label>
			                                            <div class="col-sm-10">
			                                            	<input type="hidden" value="<?php echo $this->uri->segment(4);?>" name="id">
			                                                <input type="text" class="form-control" value="<?php echo $deta->course_name; ?>" id="input-Default" name="course">
			                                            </div>
			                                        </div>
			                                        <div class="form-group">
			                                            <label class="col-sm-2 control-label">Course Detail</label>
			                                            <div class="col-sm-10">
			                                            	<textarea rows="6" cols="60" class="summernote" name="detail" >
			                                            		<?php echo $deta->detail; ?>
			                                            	</textarea>
			                                            </div>
			                                        </div>
			                                        
			                                         <div class="col-sm-offset-2 col-sm-10">
			                                            <button type="submit" class="btn btn-success">Edit Course Name</button>
			                                         </div>
			                                    </form>
			                                <?php else:?>
			                                	<form class="form-horizontal" action="<?php echo base_url()?>allform/saveCourse" method="post">
			                                        <div class="form-group">
			                                            <label for="input-Default" class="col-sm-6 control-label"><strong>Course Name</strong></label>
			                                            <div class="col-sm-6">
			                                                <input type="text" class="form-control" id="input-Default" name="course">
			                                            </div>
			                                        </div>
			                                        <div class="form-group">
			                                            <label class="col-sm-2 control-label">Course Detail</label>
			                                            <div class="col-sm-10">
			                                            	<textarea rows="6" cols="60" class="summernote" name="detial" >
			                                            		
			                                            	</textarea>
			                                            </div>
			                                        </div>
			                                         <div class="col-sm-offset-2 col-sm-10">
			                                            <button type="submit" class="btn btn-success">Batch Timing</button>
			                                         </div>
			                                    </form>
			                                <?php endif;?>
										</div>
									</div>
									<div class="row">
                            			<div class="col-md-12">
											<table class="table" style="width: 100%; cellspacing: 0;">
	                                        <thead>
	                                            <tr>
	                                                <th>#</th>
	                                                <th>Course Name</th>
	                                                <th>Action</th>
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                        	<?php $i = 1;?>
	                                        	<?php $res = $this->db->get("courses")->result();?>
	                                        	<?php foreach($res as $row):?>
	                                            <tr>
	                                                <td>
	                                                	<?php echo $i; ?>
	                                                </td>
	                                                <td><?php echo $row->course_name; ?></td>
	                                                <td>
	                                                	<a href="<?php echo base_url();?>apanel/courses/edit/<?php echo $row->id;?>">Edit</a> | 
	                                                	<a href="<?php echo base_url();?>allform/deleteCourse/<?php echo $row->id;?>">Delete</a>
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
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->