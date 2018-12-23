<div class="page-sidebar sidebar horizontal-bar">
                <div class="page-sidebar-inner">
                    <ul class="menu accordion-menu">
                        <li class="nav-heading"><span>Navigation</span></li>
                        <li class="active"><a href="<?php echo base_url();?>apanel/"><span class="menu-icon icon-speedometer"></span><p>Dashboard</p></a></li>
                        <li class="nav-heading"><span>Features</span></li>
                        <li class="droplink"><a href="#"><span class="menu-icon icon-user"></span><p>Branch</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url();?>apanel/addprofile">Add New Branch</a></li>
                                <li><a href="<?php echo base_url();?>apanel/branchList">Branch List</a></li>
                            </ul>
                        </li>
                        <li class="droplink">
                        	<a href="#">
                        		<span class="menu-icon icon-users"></span>
                        		<p>Student</p>
                        		<span class="arrow"></span>
                        	</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url();?>apanel/studentRegister">New Student</a></li>
                                <li><a href="<?php echo base_url();?>apanel/studentList">Student List</a></li>
                            </ul>
                        </li>
                        <li class="nav-heading"><span>Features</span></li>
                        <li class="droplink">
                        	<a href="#">
                        		<span class="fa fa-globe"></span>
                        		<p>&nbsp;&nbsp;&nbsp;Website</p>
                        		<span class="arrow"></span>
                        	</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url();?>apanel/inquiry">Enquiry</a></li>
                                <li><a href="<?php echo base_url();?>apanel/vacancies">Vacancies</a></li>
                                <li><a href="<?php echo base_url();?>apanel/freeDemo">Demo Class List</a></li>
                                <li><a href="<?php echo base_url();?>apanel/career">Career List</a></li>
                                <li><a href="<?php echo base_url();?>apanel/inquiry">Contact Form List</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#"><span class="fa fa-mobile"></span><p>&nbsp;&nbsp;&nbsp;SMS TAB</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li>
                                	<a href="<?php echo base_url();?>apanel/singleSms">
                                		Single SMS
                                	</a>
                                </li>
                                 <li>
                                	<a href="<?php echo base_url();?>apanel/batchWise">
                                		Batch Wise
                                	</a>
                                </li>
                                <li>
                                	<a href="<?php echo base_url();?>apanel/allStudent">
                                		All Student
                                	</a>
                                </li>
                            </ul>
                        </li>
                        <li class="droplink">
                        	<a href="#">
                        		<span class="menu-icon icon-credit-card"></span>
                        		<p>Fee</p>
                        		<span class="arrow"></span>
                        	</a>
                            <ul class="sub-menu">
	                           <li <?php if($this->uri->segment(2) == 'studentList'){?>class="active"<?php }?>>
		                        	<a href="<?php echo base_url();?>apanel/takeFee">
		                        		<span class="fa fa-cc-visa"></span>
		                        		<p>&nbsp;&nbsp;&nbsp;Take Fee</p>
		                        	</a>
	                       		</li>
	                       		<li <?php if($this->uri->segment(2) == 'studentList'){?>class="active"<?php }?>>
		                        	<a href="<?php echo base_url();?>apanel/feeSlipList">
		                        		<span class="fa fa-print">
		                        		</span><p>&nbsp;&nbsp;&nbsp;Fee Slip</p>
		                        	</a>
	                       		</li>
                            </ul>
                        </li>
                        <li class="droplink">
                        	<a href="#">
                        		<span class="fa fa-briefcase"></span>
                        		<p>&nbsp;&nbsp;&nbsp;Accounting</p>
                        		<span class="arrow"></span>
                        	</a>
                            <ul class="sub-menu">
	                           <li <?php if($this->uri->segment(2) == 'studentList'){?>class="active"<?php }?>>
		                        	<a href="<?php echo base_url();?>apanel/dailyExpense">
		                        		<span class="fa fa-bar-chart">
		                        		</span><p>&nbsp;&nbsp;&nbsp;Daily Expense</p>
		                        	</a>
	                       		</li>
	                       		<li <?php if($this->uri->segment(2) == 'studentList'){?>class="active"<?php }?>>
		                        	<a href="<?php echo base_url();?>apanel/dayBook">
		                        		<span class="fa fa-book">
		                        		</span><p>&nbsp;&nbsp;&nbsp;Day Book</p>
		                        	</a>
	                       		</li>
                            </ul>
                        </li>
                        <li class="droplink">
                        	<a href="#">
                        		<span class="menu-icon icon-settings"></span>
                        		<p>Settings</p>
                        		<span class="arrow"></span>
                        	</a>
                            <ul class="sub-menu">
	                           <li <?php if($this->uri->segment(2) == 'studentList'){?>class="active"<?php }?>>
		                        	<a href="<?php echo base_url();?>apanel/courses">
		                        		<span class="glyphicon glyphicon-list-alt">
		                        		</span><p>&nbsp;&nbsp;&nbsp;Courses</p>
		                        	</a>
	                       		</li>
	                       		<li <?php if($this->uri->segment(2) == 'studentList'){?>class="active"<?php }?>>
		                        	<a href="<?php echo base_url();?>apanel/batchTime">
		                        		<span class="glyphicon glyphicon-time">
		                        		</span><p>&nbsp;&nbsp;&nbsp;Batch Timing</p>
		                        	</a>
	                       		</li>
	                       		<li <?php if($this->uri->segment(2) == 'studentList'){?>class="active"<?php }?>>
		                        	<a href="<?php echo base_url();?>apanel/batchTimeSpecial">
		                        		<span class="glyphicon glyphicon-time">
		                        		</span><p>&nbsp;&nbsp;&nbsp;Special Batch</p>
		                        	</a>
	                       		</li>
	                       		<li <?php if($this->uri->segment(2) == 'studentList'){?>class="active"<?php }?>>
		                        	<a href="<?php echo base_url();?>apanel/batchTimeNew">
		                        		<span class="glyphicon glyphicon-time">
		                        		</span><p>&nbsp;&nbsp;&nbsp;New Batch</p>
		                        	</a>
	                       		</li>
	                       		<li <?php if($this->uri->segment(2) == 'studentList'){?>class="active"<?php }?>>
		                        	<a href="<?php echo base_url();?>apanel/expenseList">
		                        		<span class="fa fa-cc-paypal">
		                        		</span><p>&nbsp;&nbsp;&nbsp;Expence List</p>
		                        	</a>
	                       		</li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->