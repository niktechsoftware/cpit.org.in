<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function about_us()
	{
		$this->load->view('about_us');
	}
	public function d_message()
	{
		$this->load->view('d_message');
	}
	public function apparel()
	{
		$this->load->view('apparel');
	}
	public function retail()
	{
		$this->load->view('retail');
	}
	public function beauty()
	{
		$this->load->view('beauty');
	}
	public function it()
	{
		$this->load->view('it');
	}
	public function telicom()
	{
		$this->load->view('telicom');
	}
	
	public function gallary()
	{
		$this->load->view('gallary');
	}
	public function accountDetail()
	{
		$this->load->view('accountDetail');
	}
	public function contact_us()
	{
		$this->load->view('contact_us');
	}
	public function download()
	{
		$this->load->view('download');
	}
	
       function centreDetail(){
		$data = array(
				"name" => $this->input->post("name"),
				"mobile" => $this->input->post("mobile"),
				"email" => $this->input->post("email"),
				"district" => $this->input->post("district"),
				"purpose" => $this->input->post("purpose"),
				"date" => date("Y-m-d"),
				"status" => "pending"
		);
		if($this->db->insert("centre_detail",$data)){
			redirect("welcome/index");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
}
