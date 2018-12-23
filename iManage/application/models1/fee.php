<?php
	class Fee extends CI_Model{
		function insert($data){
			$this->db->insert("fee",$data);
			return true;
		}
	}