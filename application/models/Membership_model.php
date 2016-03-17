<?php

class Membership_model extends CI_Model {
	
	function validate() {
		$result = NULL;
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('membership');//name of table
		
		foreach ($query->result() as $member) {
			$result = $member;
		}
		return $result;
	}
	
	function create_member() {
		$new_member_insert_data = array(
				'first_name'		=> $this->input->post('first_name'),
				'last_name'			=> $this->input->post('last_name'),
				'email_address'		=> $this->input->post('email_address'),
				'username'			=> $this->input->post('username'),
				'password'			=> md5($this->input->post('password'))
		);
		
		$insert = $this->db->insert('membership', $new_member_insert_data);
		return $insert;
	}
}
