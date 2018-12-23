                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Enter Headline Containt and Title</h4>
                                </div>
                                <?php if($this->uri->segment(3) == 'true'):?>
	                                <div class="alert alert-success" role="alert">
	                                        Well done! You successfully saved new Vacancy.
	                                </div>
                                <?php elseif($this->uri->segment(3) == 'false'):?>
                                	<div class="alert alert-danger" role="alert">
	                                        Somthing Going Worng ! Please contact to developer....
	                                </div>
                                <?php endif;?>
                            	<div class="panel-body">
                                	<form class="form-horizontal" action="<?php echo base_url()?>allform/saveVacancies" method="post">
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Vacancy Heading</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="input-Default" name="title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Vacancy Detail</label>
                                            <div class="col-sm-10">
                                            	<textarea rows="6" cols="60" class="summernote" name="content" ></textarea>
                                            </div>
                                        </div>
                                         <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">Save Vacancy</button>
                                         </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    
                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                            		<?php if($this->uri->segment(3) == 'deltrue'):?>
		                                <div class="alert alert-success" role="alert">
		                                        Well done! You successfully Row Delete.
		                                </div>
	                                <?php elseif($this->uri->segment(3) == 'delfalse'):?>
	                                	<div class="alert alert-danger" role="alert">
		                                        Somthing Going Worng ! Please contact to developer....
		                                </div>
	                                <?php endif;?>
                            	
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $res = $this->db->get("vacancies")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->title; ?></td>
                                                <td><?php echo date("d-M-Y",strtotime($row->date)); ?></td>
                                                <td>
                                                	<a href="<?php echo base_url();?>allform/deleteVacancy/<?php echo $row->id;?>">Delete</a>
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