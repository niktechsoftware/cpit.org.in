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
                                                <th>Mobile Number</th>
                                                <th>Email</th>
                                                <th>District</th>
                                                <th>Purpose</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	
                                        	<?php 
                                        	$i=1;
                                        	 $this->db->order_by("sno", "DESC");
                                        	$res = $this->db->get("centre_detail")->result();?>
                                        	<?php foreach($res as $row):
                                        	?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->mobile; ?></td>
                                                <td><?php echo $row->email; ?></td>
                                                <td><?php echo $row->district; ?></td>
                                                <td><?php echo $row->purpose; ?></td>
                                                <td><?php echo date("d-M-Y",strtotime($row->date)); ?></td>
                                                <td>
                                                	<a href="<?php echo base_url();?>allform/deleteEnquiry/<?php echo $row->sno;?>">
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