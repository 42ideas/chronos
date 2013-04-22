<?php 

/**
* 
*/
class Project_model extends CI_Model
{

	var $id;
	var $name;
	var $description;
	var $customer;
	
	function __construct()
	{
		parent::__construct();
	}

	function create() 
	{
		try {
			$this->db->set('name', $this->name);
			$this->db->set('description', $this->description);
			$this->db->insert('project');

			return $this->db->insert_id();			
		} catch (Exception $e) {
			throw $e;
		}

	}

	function read($id) 
	{
		try {
			$this->db->select('project.id, project.name, project.description, project.customer_id, customer.name as customer');
			$this->db->join('customer', 'project.customer_id = customer.id');
			$this->db->from('project');
			$this->db->where('project.id', $id);

			return $this->db->get();
		} catch (Exception $e) {
			throw $e;
		}
	}

	function update() 
	{
		try {
			$this->db->set('name', $this->name);
			$this->db->set('description', $this->description);

			$this->db->update('project');
		} catch (Exception $e) {
			throw $e;
		}
	}

	function delete($id) 
	{
		try {
			$this->db->where('id', $id);
			$this->db->delete('project');			
		} catch (Exception $e) {
			throw $e;
		}

	}

	function list_all($limit, $offset) 
	{
		try {
			$this->db->select('project.id, project.name, project.description, project.customer_id, customer.name as customer');
			$this->db->join('customer', 'project.customer_id = customer.id');
			$this->db->from('project');
			$this->db->limit($limit, $offset);

			return $this->db->get();
		} catch (Exception $e) {
			throw $e;
		}
	}

	function search($keyword) 
	{
		try {
			$this->db->select('project.id, project.name, project.description, project.customer_id, customer.name as customer');
			$this->db->join('customer', 'project.customer_id = customer.id');
			$this->db->from('project');			
			$this->db->like('project.name', $keyword);
			$this->db->or_like('project.description', $keyword);
			$this->db->or_like('customer.name', $keyword);

			return $this->db->get();
		} catch (Exception $e) {
			throw $e;
		}
	}	
}

?>