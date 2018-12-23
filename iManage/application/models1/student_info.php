<?php
class student_info extends CI_Model{
	function saveInfo(){
                $id = $this->db->query("SELECT id From student_info order by id DESC Limit 1")->row()->id;
		$id = 1000 + $id+1;
			$data = array(
				"student_id" => $id,
				"name" => $this->input->post("name"),
				"fName" => $this->input->post("fname"),
				"address" => $this->input->post("address"),
				"city" => $this->input->post("city"),
				"state" => $this->input->post("state"),
				"pin" => $this->input->post("pin"),
				"mobile" => $this->input->post("mobile"),
				"dob" => date("Y-m-d", strtotime($this->input->post("dob"))),
				"heighQ" => $this->input->post("heighQ"),
				"courseApplied" => $this->input->post("courseApplied"),
				"timing" => $this->input->post("timing"),
				"gender" => $this->input->post("gender"),
				"email" => $this->input->post("email"),
				"password" => $this->input->post("password"),
				"total_fee" => $this->input->post("total_fee"),
                                "num_of_install" => $this->input->post("numofinstall"),
                                "type_of_install" => $this->input->post("toi"),
				"fee_method" => $this->input->post("fee_method"),
				"joinDate" => date("Y-m-d"),
				"joinTime" => date("h:i:s"),
				"branch_id" => $this->input->post("branchId"),
				"branch_no" => $this->input->post("branchNo"),
				"isApprove" => "yes"
			);
		
			if($this->db->insert("student_info",$data)){
				$abc['id'] = $id;
				$abc['isTrue'] = true;
				if($this->input->post("mobile")){
				$phone=$this->input->post("mobile");
				$sms="Welcome to National Institute Of technologies. Please Submit your photo and signature for complete the registration process";
				sms($phone,$sms);
				}
				return $abc;
			}
		
		
	}
	
	function getDataById($id){
		$this->db->where("branch_id",$id);
		$this->db->group_by("timing");
		return $this->db->get("student_info")->result();
	}
	
	function getAllByBranchBatch($branch,$batch){
		$this->db->where("branch_id",$branch);
		$this->db->where("timing",$batch);
		return $this->db->get("student_info")->result();
	}
	
	function getAll(){
		return $this->db->get("student_info")->result();
	}
}