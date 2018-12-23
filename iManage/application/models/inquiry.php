<?php
	class inquiry extends CI_Model{
		function getAll(){
			return $this->db->get("inquiry")->result();
		}
	}