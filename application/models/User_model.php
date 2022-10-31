<?php 
	class User_model extends CI_Model{
		public function store($data){
			$this->db->insert('ins',$data);
			return true;
		}
	}


?>