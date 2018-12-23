
                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <form class="form-horizontal" action="<?php echo base_url()?>allform/updateProfile" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Login Type</label>
                                            <div class="col-sm-4">
                                            	<input type="hidden" name="clinic_id" value="<?php echo $info->clinic_id;?>">
                                                <select  class="form-control" name="login_type" required="required">
			                                    	<option value="">-Login Type-</option>
			                                    	<option value="admin" <?php if($info->login_type == "admin"){ echo "selected"; }?>>Admin</option>
			                                    	<option value="branch" <?php if($info->login_type == "branch"){ echo "selected"; }?>>Branch</option>
			                                    </select>
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Branch Name</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="clinic_name" value="<?php echo $info->cilnic_name;?>" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Address Line 1</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="address_1" value="<?php echo $info->address_1;?>" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Address Line 2</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="address_2" class="form-control" value="<?php echo $info->address_2;?>" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">City</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="city" class="form-control" value="<?php echo $info->city;?>" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">State</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="state" class="form-control" value="<?php echo $info->state;?>" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Area Pin Code</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="pin" class="form-control" value="<?php echo $info->pin;?>" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Phone Number</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="phone_number" class="form-control" value="<?php echo $info->phone_number;?>" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Fax Number</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="fax_number" class="form-control" value="<?php echo $info->fax_number;?>">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Mobile Number</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="mobile_number" class="form-control date-picker" value="<?php echo $info->mobile_number;?>" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Email-1</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="email1" class="form-control" value="<?php echo $info->email1;?>">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Email-2</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="email2" class="form-control" value="<?php echo $info->email2;?>">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Head Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="head_name" class="form-control" value="<?php echo $info->head_name;?>" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Teacher Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_name" class="form-control" value="<?php echo $info->doctor_name;?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Teacher Name 1</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_name_1" class="form-control" value="<?php echo $info->doctor_name_1;?>">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Teacher Name 2</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_name_2" class="form-control" value="<?php echo $info->doctor_name_2;?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Teacher Name 3</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_name_3" class="form-control" value="<?php echo $info->doctor_name_3;?>">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Teacher Name 4</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_name_4" class="form-control" value="<?php echo $info->doctor_name_4;?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Browse Your's image (120 KB Max.)</label>
                                            <div class="col-sm-4">
                                                <input type="hidden" name="old_image" value="<?php echo $info->image;?>" >
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Browse Clinic Logo (100 KB Max.)</label>
                                            <div class="col-sm-4">
                                            	<input type="hidden" name="old_logo" value="<?php echo $info->logo;?>" >
                                                <input type="file" name="logo" class="form-control" />
                                            </div>
                                        </div>
                                        
                                        <hr/>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                            	<input type="hidden" name="submitType" value="admin">
                                                <button type="submit" class="btn btn-success">Edit Profile Information</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->