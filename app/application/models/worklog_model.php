<?php 
	
/**
* 
*/
class Worklog_model extends CI_Model
{
	
	var $id;
	var $customer_id;
	var $customer;
	var $project_id;
	var $project;
	var $user_id;
	var $username;
	var $description;
	var $start_time;
	var $end_time;
	var $total_time;

	function __construct()
	{
		parent::__construct();
	}

	function create() 
	{
		try {
			$this->db->set('customer_id', $this->customer_id);
			$this->db->set('project_id', $this->project_id);
			$this->db->set('user_id', $this->user_id);
			$this->db->set('description', $this->description);
			$this->db->set('start_time', $this->start_time);
			$this->db->set('end_time', $this->end_time);

			$this->db->insert('worklog');

			return $this->db->insert_id();
		} catch (Exception $e) {
			throw $e;
		}
	}

	function read($id) 
	{
		try {
			$this->db->select('worklog.id, worklog.customer_id, worklog.project_id, worklog.user_id, 
				worklog.description, worklog.start_time, worklog.end_time, customer.name as customer,
				project.name as project, user.username as username, 
				TIMEDIFF(worklog.end_time, worklog.start_time) as  total_time', false);
			$this->db->from('worklog');
			$this->db->join('customer', 'customer.id = worklog.customer_id');
			$this->db->join('project', 'project.id = worklog.project_id');
			$this->db->join('user', 'user.id = worklog.user_id');

			$this->db->where('worklog.id', $id);
			return $this->db->get();
		} catch (Exception $e) {
			throw $e;
		}
	}

	function update() 
	{
		try {
			$this->db->set('customer_id', $this->customer_id);
			$this->db->set('project_id', $this->project_id);
			$this->db->set('user_id', $this->user_id);
			$this->db->set('description', $this->description);
			$this->db->set('start_time', $this->start_time);
			$this->db->set('end_time', $this->end_time);

			$this->db->where('id', $this->id);
			$this->db->update('schedule');

		} catch (Exception $e) {
			throw $e;
		}		
	}

	function delete($id) 
	{
		try {
			$this->db->where('id', $id);
			$this->db->delete();
		} catch (Exception $e) {
			throw $e;
		}
	}

	function list_all($limit, $offset) 
	{
		try {
			$this->db->select('worklog.id, worklog.customer_id, worklog.project_id, worklog.user_id, 
				worklog.description, worklog.start_time, worklog.end_time, customer.name as customer,
				project.name as project, user.username as username, 
				TIMEDIFF(worklog.end_time, worklog.start_time) as  total_time', false);
			$this->db->from('worklog');
			$this->db->join('customer', 'customer.id = worklog.customer_id');
			$this->db->join('project', 'project.id = worklog.project_id');
			$this->db->join('user', 'user.id = worklog.user_id');

			$this->db->limit($limit, $offset);
			return $this->db->get();
		} catch (Exception $e) {
			throw $e;
		}		
	}

	function search($keyword) 
	{
		try {
			$this->db->select('worklog.id, worklog.customer_id, worklog.project_id, worklog.user_id, 
				worklog.description, worklog.start_time, worklog.end_time, customer.name as customer,
				project.name as project, user.username as username, 
				TIMEDIFF(worklog.end_time, worklog.start_time) as  total_time', false);
			$this->db->from('worklog');
			$this->db->join('customer', 'customer.id = worklog.customer_id');
			$this->db->join('project', 'project.id = worklog.project_id');
			$this->db->join('user', 'user.id = worklog.user_id');

			$this->db->like('customer.name', $keyword);
			$this->db->or_like('project.name', $keyword);
			$this->db->or_like('user.name', $keyword);
			$this->db->or_like('worklog.description', $keyword);
			return $this->db->get();
		} catch (Exception $e) {
			throw $e;
		}			
	}
}

?>