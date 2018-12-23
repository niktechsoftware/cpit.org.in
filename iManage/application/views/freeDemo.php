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
                                                <th>Course</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Batch Time</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $res = $this->db->get("democlass")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->course; ?></td>
                                                <td><?php echo $row->mobile; ?></td>
                                                <td><?php echo $row->email; ?></td>
                                                <td><?php echo $row->batchTime; ?></td>
                                                <td><?php echo date("d-M-Y",strtotime($row->date)); ?></td>
                                                <td>
                                                	<a href="<?php echo base_url();?>apanelForms/deleteDemoclass/<?php echo $row->id;?>">
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