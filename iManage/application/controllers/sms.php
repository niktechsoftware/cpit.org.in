<?php
class Sms extends CI_Controller{
	function single(){
		$val=$this->db->get("sms_setting")->row();
		$senderiD=$val->sender_id;
		$authkey=$val->auth_key;
		
		$msg =	$this->input->post("msg");
		$fmobile = $this->input->post("mobile");
		sms($authkey,$msg,$senderiD,$fmobile);
		redirect(base_url()."apanel/singleSms");
	}
	function batchWise(){
		$val=$this->db->get("sms_setting")->row();
		$senderiD=$val->sender_id;
		$authkey=$val->auth_key;
		
		$msg =	$this->input->post("msg");
		$branch = $this->input->post("branch");
		$batch = $this->input->post("batch");
		
		$val = $this->student_info->getAllByBranchBatch($branch,$batch);
		foreach ($val as $row):
			$fmobile = $row->mobile;
			sms($authkey,$msg,$senderiD,$fmobile);
			//echo $fmobile;
		endforeach;
		
		redirect(base_url()."apanel/batchWise");
	}
	function all(){
		$val=$this->db->get("sms_setting")->row();
		$senderiD=$val->sender_id;
		$authkey=$val->auth_key;
	
		$this->load->helper("sms");
		$msg =	$this->input->post("msg");
		$val = $this->student_info->getAll();
		foreach ($val as $row):
			$fmobile = $row->mobile;
			sms($authkey,$msg,$senderiD,$fmobile);
		endforeach;
		redirect(base_url()."apanel/allStudent");
	}
}