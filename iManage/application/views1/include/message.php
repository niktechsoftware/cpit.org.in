							<ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name"><?php echo $this->session->userdata("head_name");?><i class="fa fa-angle-down"></i></span>
                                        <img class="img-circle avatar" src="<?php echo base_url();?>assets/images/docImg/<?php echo $this->session->userdata("photo");?>" width="40" height="40" alt="">
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a href="<?php echo base_url();?>apanel/profile"><i class="fa fa-user"></i>Profile</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="<?php echo base_url();?>login/logout"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                                    </ul>
                                </li>
                            </ul><!-- Nav -->