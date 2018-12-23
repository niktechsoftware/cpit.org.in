<?php
class expense extends CI_Model{
	function getAll(){
		return $this->db->get("expense")->result();
	}
}