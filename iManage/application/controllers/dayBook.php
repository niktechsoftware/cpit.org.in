<?php
class DayBook extends CI_Controller{
	public function dayBookDetail(){
		$data['title'] = "Day Book Detail";
		$data['smallTitle'] = "Day Book / Day Book Detail";
		$data['bigTitle'] = "Day Book Detail";
		$data['body'] = "dayBookDetail";
		$data['headerCss'] = "headerCss/listCss";
		$data['footerJs'] = "footerJs/listJs";
		$this->load->view("include/mainContent",$data);
	}
}