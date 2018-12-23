                 <?php $val = $this->db->get("student_info")->result();?>
                 <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>SNo.</th>
												<th>Student ID</th>
												<th>Student Name</th>
												<th>Course Applied</th>
												<th>Mobile</th>
												<th>Address</th>
												<th>Branch</th>
												<th>Detail</th>	
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $sno = 1; foreach ($val as $row): ?>
											<tr>
												<td><?php echo $sno; ?></td>
												<td><?php echo $row->student_id; ?></td>
												<td><?php echo $row->name; ?></td>
												<td><?php echo $row->courseApplied; ?></td>
												<td><?php echo $row->mobile; ?></td>
												<td><?php echo $row->address." ".$row->city." ".$row->state." ".$row->pin; ?></td>
												<td><?php echo $row->branch_id; ?></td>
												<td><a href="<?php echo base_url(); ?>apanel/viewfeeD/<?php echo $row->student_id;?>">Full Fee Detail</a></td>
											</tr>
											<?php $sno++; endforeach; ?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->