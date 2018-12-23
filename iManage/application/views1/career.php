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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Subject</th>
                                                <th>Qualification</th>
                                                <th>Specialization</th>
                                                <th>Experience</th>
                                                <th>Resume</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $res = $this->db->get("career")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->email; ?></td>
                                                <td><?php echo $row->mobile; ?></td>
                                                
                                                <td><?php echo $row->subject; ?></td>
                                                <td><?php echo $row->qualification; ?></td>
                                                <td><?php echo $row->specialization; ?></td>
                                                <td><?php echo $row->experience; ?></td>
                                                <td>
                                                	<a href="<?php echo base_url();?>assets/images/StuImage/<?php echo $row->resume; ?>">
                                                		<?php echo $row->resume; ?>
                                                	</a>
                                                </td>
                                                
                                                <td><?php echo date("d-M-Y",strtotime($row->date)); ?></td>
                                                <td>
                                                	<a href="<?php echo base_url();?>apanelForms/deleteCareer/<?php echo $row->id;?>/<?php echo $row->resume; ?>">
                                                		Delete
                                                	</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            <?php endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->