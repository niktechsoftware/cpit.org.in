<?php
class ajaxMsg extends CI_Controller{
	function loadInbox(){
		$this->load->view("ajax/inbox");
	}
	
	function loadCompose(){
		$this->load->view("ajax/compose");
	}
	
	function msgDetail(){
		$this->load->view("ajax/msgContent");
	}
}