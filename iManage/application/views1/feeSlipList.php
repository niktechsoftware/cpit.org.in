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
                                                <th>Student Id</th>
                                                <th>Invoice Number</th>
                                                <th>Paid Amount</th>
                                                <th>Paid Date</th>
                                                <th>Recieved By</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1; $res = $this->db->get("fee")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                            	<td><?php echo $i; ?></td>
                                                <td>
                                                	<?php echo $row->student_id; ?>
                                                </td>
                                                <td>
                                                	<?php echo $row->invoice_no; ?>
                                                </td>
                                                <td><?php echo $row->paid; ?></td>
                                                <td><?php echo $row->paid_date; ?></td>
                                                <td><?php echo $row->recieved_by; ?></td>
                                                <td>
                                                	<a href="<?php echo base_url()?>apanel/feeInvoice/<?php echo $row->student_id; ?>/<?php echo $row->invoice_no; ?>" target="_blank">
                                                		<?php echo $row->invoice_no; ?>
                                                	</a>
                                                </td>
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