<?php 

/**
* 
*/
class Customer_model extends CI_Model
{

	var $id;
	var $name;
	var $description;
	
	function __construct()
	{
		parent::__construct();
	}

	function create() 
	{
		try {
			$this->db->set('name', $this->name);
			$this->db->set('description', $this->description);
			$this->db->insert('customer');

			return $this->db->insert_id();			
		} catch (Exception $e) {
			throw $e;
		}

	}

	function read($id) 
	{
		try {
			$this->db->where('id', $id);
			return $this->db->get('customer');
		} catch (Exception $e) {
			throw $e;
		}
	}

	function update() 
	{
		try {
			$this->db->set('name', $this->name);
			$this->db->set('description', $this->description);
                        $this->db->where('id', $this->id);
			$this->db->update('customer');
		} catch (Exception $e) {
			throw $e;
		}
	}

	function delete($id) 
	{
		try {
			$this->db->where('id', $id);
			$this->db->delete('customer');			
		} catch (Exception $e) {
			throw $e;
		}

	}

	function list_all($limit, $offset) 
	{
		try {
			return $this->db->get('customer', $limit, $offset);
		} catch (Exception $e) {
			throw $e;
		}
	}

	function search($keyword) 
	{
		try {
			$this->db->like('name', $keyword);
			$this->db->or_like('description', $keyword);

			return $this->db->get('customer');
		} catch (Exception $e) {
			throw $e;
		}
	}
}

?>