<?php
class InvoiceController extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->isLogin();
	}
	
	function isLogin(){
		$is_login = $this->session->userdata('is_login');
		$is_lock = $this->session->userdata('is_lock');
		if(!$is_login){
			//echo $is_login;
			redirect(base_url()."welcome/index");
		}
		elseif(!$is_lock){
			redirect(base_url()."welcome/lockPage");
		}
	}
	
	public function registerC(){
		$data['studentId'] = $this->uri->segment(3);
		$this->load->view("invoice/registerC",$data);
	}
	
	public function feeInvoicePrint(){
		$data['studentId'] = $this->uri->segment(3);
		$data['invoice'] = $this->uri->segment(4);
		$this->load->view("invoice/feeInvoice",$data);
	}
}