<?php
class AllForm extends CI_Controller{
	public function editProfile(){
		$data['info'] = $this->general_settings->getInfoById($this->input->post("id"));
		$data['subPage'] = 'Profile';
		$data['smallTitle'] = 'Edit Profile';
		$data['pageTitle'] = 'Edit Your Profile - '.$data['info']->clinic_id;
		$data['title'] = 'Pain Clinic | Edit Profile';
		$data['headerCss'] = 'headerCss/messageCss';
		$data['footerJs'] = 'footerJs/profileJs';
		$data['mainContent'] = 'edit_profile';
		
		$this->load->view("include/template", $data);
	}
//-------------------------------------------------------------------- Update Profile ----------------------------------------
	public function updateProfile(){
		$data = $this->general_settings->updateInfo();
		if($data['isTrue']){
			redirect(base_url()."apanel/profile/".$data['id']."");
		}else{
			redirect(base_url()."apanel/profile/");
		}
	}
//----------------------------------------------------------- Add new Branch informaton ------------------------

	function addNewProfile(){
		if($this->general_settings->saveInfo()){
			redirect(base_url()."apanel/branchList/");
		}else{
			redirect(base_url()."apanel/addprofile/False");
		}
	}
//----------------------------------------------------------- Add new Branch informaton ------------------------	
	public function saveRegister(){
		$data = $this->student_info->saveInfo();
		if($data['isTrue']){
			redirect(base_url()."apanel/printRegister/".$data['id']."/lkfjsaodif0w9809sodiuf4rifsd9f80w934oiwoifu");
		}
	}
	
	public function saveVacancies(){
		$data = array(
				"title" => $this->input->post("title"),
				"msg" => $this->input->post("content"),
				"date" => date("Y-m-d")
		);
		if($this->vacancies->save($data)){
			redirect(base_url()."apanel/vacancies/true");
		}else{
			redirect(base_url()."apanel/vacancies/false");
		}
		
	}
	
	public function deleteVacancy(){
		if($this->vacancies->delete($this->uri->segment(3))){
			redirect(base_url()."apanel/vacancies/deltrue");
		}else{
			redirect(base_url()."apanel/vacancies/delfalse");
		}
	}
	
//------------------------------------------------------------------------------------------------------------------------------
	public function saveBatch(){
		$data = array(
				"batch_time" => $this->input->post("batch")
		);
		if($this->db->insert("batch_time",$data)){
			redirect("apanel/batchTime");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function editBatch(){
		$data = array(
				"batch_time" => $this->input->post("batch")
		);
		$this->db->where("id",$this->input->post("id"));
		if($this->db->update("batch_time",$data)){
			redirect("apanel/batchTime");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function deleteBatch(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("batch_time")){
			redirect("apanel/batchTime");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//------------------------------------------------------------------------------------------------------------------------------
	public function saveBatchNew(){
		$data = array(
				"batch_time" => $this->input->post("batch")
		);
		if($this->db->insert("batch_new",$data)){
			redirect("apanel/batchTimeNew");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function editBatchNew(){
		$data = array(
				"batch_time" => $this->input->post("batch")
		);
		$this->db->where("id",$this->input->post("id"));
		if($this->db->update("batch_new",$data)){
			redirect("apanel/batchTimeNew");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function deleteBatchNew(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("batch_new")){
			redirect("apanel/batchTimeNew");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//------------------------------------------------------------------------------------------------------------------------------
	public function saveBatchSpecial(){
		$data = array(
				"batch_time" => $this->input->post("batch")
		);
		if($this->db->insert("batch_special",$data)){
			redirect("apanel/batchTimeSpecial");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function editBatchSpecial(){
		$data = array(
				"batch_time" => $this->input->post("batch")
		);
		$this->db->where("id",$this->input->post("id"));
		if($this->db->update("batch_special",$data)){
			redirect("apanel/batchTimeSpecial");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function deleteBatchSpecial(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("batch_special")){
			redirect("apanel/batchTimeSpecial");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//------------------------------------------------------------------------------------------------------------------------------
	public function saveExpenseList(){
		$data = array(
				"eName" => $this->input->post("batch")
		);
		if($this->db->insert("expense",$data)){
			redirect("apanel/expenseList");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function editExpenseList(){
		$data = array(
				"eName" => $this->input->post("batch")
		);
		$this->db->where("id",$this->input->post("id"));
		if($this->db->update("expense",$data)){
			redirect("apanel/expenseList");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function deleteExpenseList(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("expense")){
			redirect("apanel/expenseList");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//------------------------------------------------------------------------------------------------------------------------------
	public function saveCourse(){
		$data = array(
				"course_name" => $this->input->post("course"),
				"detail" => $this->input->post("detial")
		);
		if($this->db->insert("courses",$data)){
			redirect("apanel/courses");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function editCourse(){
		$data = array(
				"course_name" => $this->input->post("course"),
				"detail" => $this->input->post("detial")
		);
		$this->db->where("id",$this->input->post("id"));
		if($this->db->update("courses",$data)){
			redirect("apanel/courses");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function deleteCourse(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("courses")){
			redirect("apanel/courses");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	public function deleteStudent(){
		$this->db->where("student_id",$this->uri->segment(3));
		if($this->db->delete("student_info")){
			redirect("apanel/studentList");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
}