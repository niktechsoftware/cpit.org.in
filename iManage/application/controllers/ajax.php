<?php
class Ajax extends CI_Controller{
	function loadBatch(){
		//echo "<option>Rahul</option>";
		$data['detail'] = $this->student_info->getDataById($this->input->post("branchId"));
		$this->load->view("ajax/branchCodeList",$data);
	}
}