<?php 
	class User_model extends CI_Model{
		public function getUsers(){
			return $this->db->get('users')->result();
		}

		public function getUser($id){
			return $this->db->where('id',$id)->get('users')->row();
		}
	}
