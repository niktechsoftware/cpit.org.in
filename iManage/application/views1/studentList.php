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
                                                 <td><a href="<?php echo base_url()?>allform/deleteStudent/<?php echo $row->student_id; ?>/lkfjsaodif0w9809sodiuf4rifsd9f80w934oiwoifu">Delete</a></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->