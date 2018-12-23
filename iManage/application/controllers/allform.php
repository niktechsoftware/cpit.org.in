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
	public function editSaveRegisterp(){
		$student_id = $this->input->post('student_id');
		$photo_name = time().trim($_FILES['cphoto']['name']);
		$signature =time().trim($_FILES['signature']['name']);
		$new_img = array(
			
						"photo"=> $photo_name,
						"signature"=>$signature
				);
		$this->load->model("student_info");
		if($query = $this->student_info->updateStudentInfo($new_img,$student_id)){
			$this->load->library('upload');
			// Set configuration array for uploaded photo.
			$image_path = realpath(APPPATH . '../assets/images/stuImage');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '2024';
			$config['file_name'] = $photo_name;
			
			// Upload first photo and create a thumbnail of it.
			if (!empty($_FILES['cphoto']['name'])) {
				$this->upload->initialize($config);
				$this->upload->do_upload('cphoto'); 
			}
		}
		$this->load->library('upload');
		$image_path = realpath(APPPATH . '../assets/images/stuImage');
		$config['upload_path'] = $image_path;
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '2024';
		$config['file_name'] = $signature;
		
		if (!empty($_FILES['signature']['name'])) {
			$this->upload->initialize($config);
			
			if ($this->upload->do_upload('signature'))  {
				
				
			}
		}
		redirect("apanel/studentEdit/$student_id");
	}
	public function editSaveRegister(){
		$student_id = $this->input->post('student_id');
		$photo_name = time().trim($_FILES['cphoto']['name']);
		$signature =time().trim($_FILES['signature']['name']);
		$new_img = array(
				"name" => $this->input->post("name"),
				"fName" => $this->input->post("fname"),
				"address" => $this->input->post("address"),
				"city" => $this->input->post("city"),
				"state" => $this->input->post("state"),
				"pin" => $this->input->post("pin"),
				"mobile" => $this->input->post("mobile"),
				"mother_name"=>$this->input->post("mother_name"),
				"aadhar_number"=>$this->input->post("aadhar_number"),
				"dob" => date("Y-m-d", strtotime($this->input->post("dob"))),
				"heighQ" => $this->input->post("heighQ"),
				"courseApplied" => $this->input->post("courseApplied"),
				"timing" => $this->input->post("timing"),
				"gender" => $this->input->post("gender"),
				"total_fee" => $this->input->post("total_fee"),
				"num_of_install" => $this->input->post("numofinstall"),
				"type_of_install" => $this->input->post("toi"),
				"fee_method" => $this->input->post("fee_method"),
				"branch_id" => $this->input->post("branchId"),
				"branch_no" => $this->input->post("branchNo"),
				"remark"=>$this->input->post("remark"),
				"isApprove" => "yes"
		);
		$this->load->model("student_info");
		if($query = $this->student_info->updateStudentInfo($new_img,$student_id)){
			
		redirect("apanel/studentEdit/$student_id");
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
//-------------------------------------------------------------------------------------------------------------------------------
        
        
        public function deleteEnquiry(){
		$this->db->where("sno",$this->uri->segment(3));
		if($this->db->delete("centre_detail")){
			redirect(base_url()."apanel/inquiry");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//-------------------------------------------------------------------------------------------------------------------------------
        public function noticeBoard(){
		$data = array(
				"title" => $this->input->post("title"),
				"msg" => $this->input->post("content"),
				"date" => date("Y-m-d")
		);
		if($this->db->insert("notice",$data)){
			redirect(base_url()."apanel/noticeBoard");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
//-----------------------------------------------------------------------------------------------------------------------------		
	public function editHeadline(){
		$data = array(
				"title" => $this->input->post("title"),
				"notice" => $this->input->post("content"),
				"date" => date("Y-m-d")
		);
		$this->db->where("id",$this->input->post("id"));
		if($this->db->update("notice",$data)){
			redirect(base_url()."apanel/noticeBoard");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function deleteHeadline(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("notice")){
			redirect(base_url()."apanel/noticeBoard");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//-----------------------------------------------------------------------------------------------------------------------------	
	
	function saveGallery(){
		$photo_name = time().trim($_FILES['selectedStu']['name']);
		$data=array(
				'name'=>$this->input->post("title"),
				'image'=>$photo_name,
				'date'=>date("Y-m-d")
		);
		$query = $this->db->insert("gallery",$data);
		if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/gallery/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '1024';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('selectedStu');
			redirect(base_url()."apanel/gallery/23");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function deleteGallery(){
		$this->db->where("sno",$this->uri->segment(3));
		 $image = $this->uri->segment(4);
		@chmod("assets/images/gallery/" . $image, 0777);
		@unlink("assets/images/gallery/" . $image);
		
		if($this->db->delete("gallery")){
			redirect(base_url()."apanel/gallery");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	
//-----------------------------------------------------------------------------------------------------------------------------	
//-----------------------------------------------------------------------------------------------------------------------------	
		
	function saveDownload(){
		
		$photo_name =time().trim(str_replace(' ', '', ($_FILES['selectedStu']['name'])));
		$data=array(
				'name'=>$this->input->post("title"),
				'image'=>$photo_name,
				'date'=>date("Y-m-d")
		);
		$query = $this->db->insert("download",$data);
		if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/download/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|docx|doc|DOC|DOCX|xlsx|csv|xls';
			$config['max_size'] = '20480';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('selectedStu');
			redirect(base_url()."apanel/download/23");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function deleteDownload(){
		$this->db->where("sno",$this->uri->segment(3));
		 $image = $this->uri->segment(4);
		@chmod("assets/images/download/" . $image, 0777);
		@unlink("assets/images/download/" . $image);
		
		if($this->db->delete("download")){
			redirect(base_url()."apanel/download");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//-----------------------------------------------------------------------------------------------------------------------------		
	
		
	
}