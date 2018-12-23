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
                                            	<th>Branch Id</th>
                                                <th>Login Type</th>
                                                <th>User Name</th>
                                                <th>Branch Name</th>
                                                <th>Address</th>
                                                <th>Mobile</th>
                                                <th>Email1</th>
                                                <th>Head Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1; foreach($branchList->result() as $row):?>
                                            <tr>
                                            	<td><?php echo $i; ?></td>
                                                <td>
                                                	<a href="<?php echo base_url()?>apanel/profile/<?php echo $row->clinic_id; ?>/lkfjsaodif0w9809sodiuf4rifsd9f80w934oiwoifu">
                                                		<?php echo $row->clinic_id; ?>
                                                	</a>
                                                </td>
                                                <td><?php echo $row->login_type; ?></td>
                                                <td><?php echo $row->username; ?></td>
                                                <td><?php echo $row->cilnic_name; ?></td>
                                                <td><?php echo $row->address_1; ?></td>
                                                <td><?php echo $row->mobile_number; ?></td>
                                                <td><?php echo $row->email1; ?></td>
                                                <td><?php echo $row->head_name; ?></td>
                                            </tr>
                                            <?php $i++; endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->