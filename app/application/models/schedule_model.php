<?php

class Schedule_model extends CI_Model {

	var $id;
	var $check_in;
	var $check_out;
	var $user_id;
	var $user;

	function __construct() 
	{
		parent::__construct();
	}

	function create() 
	{
		try {
			$this->db->set('check_in', $this->check_in);
			$this->db->set('check_out', $this->check_out);
			$this->db->set('user_id', $this->user_id);

			$this->db->insert('schedule');

			return $this->db->insert_id();
		} catch (Exception $e) {
			throw $e;
		}
	}

	function update() 
	{
		try {
			$this->db->set('check_in', $this->check_in);
			$this->db->set('check_out', $this->check_out);

			$this->db->where('id', $this->id);
		}
	}
}

?>