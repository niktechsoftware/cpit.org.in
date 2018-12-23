<?php
class vacancies extends CI_Model{
	function save($value){
		if($this->db->insert("vacancies",$value)){
			return true;
		}else{
			return false;
		}
	}
	
	function delete($id){
		$this->db->where("id",$id);
		if($this->db->delete("vacancies")){
			return true;
		}else{
			return false;
		}
	}
}