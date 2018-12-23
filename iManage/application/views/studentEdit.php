                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                 <form class="form-horizontal" action="<?php echo base_url()?>apanel/studentEdit" method="post" enctype="multipart/form-data">
                                       
                                  <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Enter Valid Id</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="rollnumber" value = "<?php if(($grtid!=0)&&($grtid!=2)){ echo $grtid1->student_id;} ?>" placeholder="Enter Valid ID" required="required">
                                            </div>
                                             <div class="col-sm-4">
                                                <button type="submit" class="btn btn-success">Get Information</button>
                                             </div>
                                            
                                   </div>
                                </form>
                                </br>
                                </br>
                                <?php if(($grtid!=0)&&($grtid!=2)){?>
                                   <form class="form-horizontal" action="<?php echo base_url()?>allform/editSaveRegisterp" method="post" enctype="multipart/form-data">  
                                       <input class="form-control" type="hidden" name="student_id"  value = "<?php echo $grtid1->student_id;?>" >
                                      <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Candidate Photo</label>
                                            <?php if($grtid1->photo){?>
                                             <div class="col-sm-4">
                                           <img src="<?php echo base_url();?>assets\images\stuImage\<?php echo $grtid1->photo;?>" alt="Smiley face" height="60" width="50">
                                            <input class="form-control" type="file" name="cphoto"  value="<?php echo $grtid1->photo;?>" >
                                            </div>
                                            <?php }else{?>
                                             <div class="col-sm-4">
                                                <input class="form-control" type="file" name="cphoto"  value="<?php echo $grtid1->photo;?>" >
                                            </div>
                                            <?php }?>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Candidate Signature</label>
                                             <?php if($grtid1->signature){?>
                                            
                                            <div class="col-sm-4">
                                             <img src="<?php echo base_url();?>assets\images\stuImage\<?php echo $grtid1->signature;?>" alt="Smiley face" height="42" width="42">
                                                <input type="file" name="signature" class="form-control" value = "<?php echo $grtid1->signature;?>"  >
                                            </div>
                                            <?php }else{?>
                                            	
                                            	<div class="col-sm-4">
                                            		<input type="file" name="signature" class="form-control" value = "<?php echo $grtid1->signature;?>"  >
                                            	</div>
													<?php 	}?>
                                        </div>
                                          <div class="form-group">
                                         
                                            <div class="col-sm-offset-2 col-sm-3">
                                            	<input type="hidden" name="submitType" value="admin">
                                                <button type="submit" class="btn btn-success">Save Student Information</button>
                                            </div>
                                        </div>
                                    
                                 </form>   
                                    
                                    <form class="form-horizontal" action="<?php echo base_url()?>allform/editSaveRegister" method="post" enctype="multipart/form-data">
                                        <input class="form-control" type="hidden" name="student_id"  value = "<?php echo $grtid1->student_id;?>" >
                                          
                                        
                                          <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Batch No</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="branchNo" placeholder="Batch No" value = "<?php echo $grtid1->branch_no;?>" required="required">
                                            </div>
                                             <label for="inputEmail3" class="col-sm-2 control-label">Select Branch</label>
                                            <div class="col-sm-4">
                                                <select name="branchId" class="form-control" required="required">
													<option value="">-Select Branch-</option>
													<?php 
														$courses = $this->general_settings->allInfo();
														foreach($courses as $row):
													?>
														<option value="<?php echo $row->clinic_id;?>" <?php if($grtid1->branch_id==$row->clinic_id){echo 'selected="selected"';}?>><?php echo $row->cilnic_name;?> (<?php echo $row->clinic_id;?>)</option>
													<?php endforeach;?>
												</select>
                                            </div>
                                        </div>
                                     
                                      
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Candidate Name</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="name" value = "<?php echo $grtid1->name;?>" placeholder="Candidate Name" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Father's Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="fname" class="form-control" value = "<?php echo $grtid1->fName;?>" placeholder="Father's Name" required="required">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Mother's Name</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="mother_name" value = "<?php echo $grtid1->mother_name;?>" placeholder="Mother Name" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Aadhar Number</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="aadhar_number" class="form-control" value = "<?php echo $grtid1->aadhar_number;?>" placeholder="AAdhar Number" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Full Address</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="address" class="form-control" value = "<?php echo $grtid1->address;?>" placeholder="Full Address" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Your City</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="city" class="form-control" value = "<?php echo $grtid1->city;?>" placeholder="Your City" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Your State</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="state" class="form-control" value = "<?php echo $grtid1->state;?>" placeholder="Your State" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Area Pin Code</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="pin" class="form-control" value = "<?php echo $grtid1->pin;?>" placeholder="Area Pin Code" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Contact Number</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="mobile" class="form-control" value = "<?php echo $grtid1->mobile;?>" placeholder="Contact Number" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Date of birth</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="dob" class="form-control date-picker" value = "<?php echo $grtid1->dob;?>" placeholder="Date of birth" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Heighest Qualification</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="heighQ" class="form-control" value = "<?php echo $grtid1->heighQ;?>" placeholder="Heighest Qualification" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Course Applied for</label>
                                            <div class="col-sm-4">
                                                <select name="courseApplied" class="form-control" required="required">
													<option value="">-Select Course-</option>
													<?php 
														$courses = $this->db->get("courses")->result();
														foreach($courses as $row):
													?>
														<option value="<?php echo $row->course_name;?>" <?php if($grtid1->courseApplied==$row->course_name){echo 'selected="selected"';}?>><?php echo $row->course_name;?></option>
													<?php endforeach;?>
												</select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Select batch timing</label>
                                            <div class="col-sm-4">
                                                <select  class="form-control" name="timing" required="required">
			                                    	<option value="">-Select batch time-</option>
			                                    	<?php 
														$courses = $this->db->get("batch_time")->result();
														foreach($courses as $row):
													?>
														<option value="<?php echo $row->batch_time;?>" <?php if($grtid1->timing==$row->batch_time){echo 'selected="selected"';}?> ><?php echo $row->batch_time;?></option>
													<?php endforeach;?>
			                                    </select>
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Select Gender</label>
                                            <div class="col-sm-4">
                                                <select  class="form-control" name="gender" required="required">
			                                    	<option value="">-Select Gender-</option>
			                                    	<option value="Male" <?php if($grtid1->gender=="Male"){echo 'selected="selected"';}?>>Male</option>
			                                    	<option value="Female" <?php if($grtid1->gender=="Female"){echo 'selected="selected"';}?>>Female</option>
			                                    </select>
                                            </div>
                                        </div>
                                        
                                        <hr/>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Total Fee</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="total_fee" class="form-control" value = "<?php echo $grtid1->total_fee;?>" placeholder="Total Course Fee" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Fee Method</label>
                                            <div class="col-sm-4">
                                                 <select  class="form-control" id="fee_method"  name="fee_method" required="required">
			                                    	<option value="">-Select Method-</option>
			                                    	<option value="One Time" <?php if($grtid1->fee_method=="One Time"){echo 'selected="selected"';}?>>One Time</option>
			                                    	<option value="Installment" <?php if($grtid1->fee_method=="Installment"){echo 'selected="selected"';}?>>Installment</option>
			                                    	<option value="Monthly" <?php if($grtid1->fee_method=="Monthly"){echo 'selected="selected"';}?>>Monthly</option>
			                                    </select>
                                            </div>
                                        </div>
                                         <div class="form-group" id ="installp">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Number Of Installment</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="numofinstall"  class="form-control" placeholder="Number Of Installment" >
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Type Of Installment</label>
                                            <div class="col-sm-4">
                                                 <select  class="form-control" name="toi" >
			                                    	<option value="" <?php if($grtid1->num_of_install==""){echo 'selected="selected"';}?>>-Select Type of Installment-</option>
			                                    	<option value="1" <?php if($grtid1->num_of_install=="1"){echo 'selected="selected"';}?>>After One Time</option>
			                                    	<option value="2" <?php if($grtid1->num_of_install=="2"){echo 'selected="selected"';}?>>After two Installment</option>
			                                    	<option value="3" <?php if($grtid1->num_of_install=="3"){echo 'selected="selected"';}?>>After Three Month</option>
			                                    </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                         <label for="inputEmail3" class="col-sm-2 control-label">Remark</label>
                                            <div class="col-sm-4">
                                                <textarea rows="2" cols="12" name ="remark" class="col-sm-12 control-label"><?php echo $grtid1->remark;?></textarea>
                                            </div>
                                            <div class="col-sm-offset-2 col-sm-3">
                                            	<input type="hidden" name="submitType" value="admin">
                                                <button type="submit" class="btn btn-success">Save Student Information</button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->