<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
            <h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="fa fa-times"></i></a></h3>
            <div class="slimscroll">
            	<?php
					$this->db->where("user_data !=","");
					$a = $this->db->get("ci_sessions");
					foreach($a->result() as $row){
							$custom_data = unserialize($row->user_data);
				?>
					<a href="javascript:void(0);" class="showRight2"><img src="<?php echo base_url();?>assets/images/docImg/<?php echo $custom_data['photo']?>" alt="<?php echo $custom_data['head_name']?>"><span><?php echo $custom_data['head_name']?><small>I am Alone... :(</small></span></a>
				<?php
					}
				?>
             </div>
		</nav>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
            <h3><span class="pull-left">Sandra Smith</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
            <div class="slimscroll chat">
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="<?php echo base_url();?>assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Hi There!
                    </div>
                </div>
            </div>
            <div class="chat-write">
                <form class="form-horizontal" action="javascript:void(0);">
                    <input type="text" class="form-control" placeholder="Say something">
                </form>
            </div>
		</nav>