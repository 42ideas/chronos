<?php

class User_model extends CI_Model {

	var $id;
	var $username;
	var $password;
	var $first_name;
	var $last_name;
	var $email;
	var $role;

	function __construct() 
	{
		parent::__construct();
	}

	function create() 
	{
		try {
			//set values before insert
			$this->db->set('username', $this->username);
			$this->db->set('password', md5($this->password));
			$this->db->set('first_name', $this->first_name);
			$this->db->set('last_name', $this->last_name);
			$this->db->set('email', $this->email);
			$this->db->set('role', $this->role);

			$this->db->insert('user');

			//return the inserted id
			return $this->db->insert_id();
		} catch (Exception $e) {
			throw $e;
		}
	}

	function update() 
	{
		try {
			//set values before insert
			$this->db->set('username', $this->username);
			$this->db->set('password', md5($this->password));
			$this->db->set('first_name', $this->first_name);
			$this->db->set('last_name', $this->last_name);
			$this->db->set('email', $this->email);
			$this->db->set('role', $this->role);

			//filter by user
			$this->db->where('id', $this->id);
			$this->db->update('user');			
		} catch (Exception $e) {
			throw $e;
		}
	}

	function read($id) 
	{
		try {
			$this->db->where('id', $id);
			return $this->db->get('user');
		} catch(Exception $e) {
			throw $e;
		}
	}

	function delete($id) 
	{
		try {
			$this->db->where('id', $id);
			$this->db->delete('user');
		} catch (Exception $e) {
			throw $e;
		}
	}

	function list($limit, $offset) 
	{
		try {
			return $this->db->get('user', $limit, $offset);
		} catch (Exception $e) {
			throw $e;
		}
	}

	function search($keyword) 
	{
		try {
			$this->db->like('username', $keyword);
			$this->db->or_like('first_name', $keyword);
			$this->db->or_like('last_name', $keyword);
			$this->db->or_like('email', $keyword);

			return $this->db->get('user');
		} catch (Exception $e) {
			throw $e;
		}
	}

}

?>