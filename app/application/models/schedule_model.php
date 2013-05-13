<?php

class Schedule_model extends CI_Model {

    var $id;
    var $check_in;
    var $check_out;
    var $user_id;
    var $username;
    var $first_name;
    var $last_name;
    var $full_name;
    var $total_time;

    function __construct() {
        parent::__construct();
    }

    function create() {
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

    function read($id) {
        try {
            $this->db->select("schedule.id, schedule.check_in, schedule.check_out, schedule.user_id, 
				user.username, user.first_name, user.last_name, 
				CONCAT(user.first_name, ' ' ,user.last_name) as full_name,
				TIMEDIFF(schedule.check_out, schedule.check_in) as  total_time", FALSE);
            $this->db->from('schedule');
            $this->db->join('user', 'user.id = schedule.user_id');
            $this->db->where('schedule.id', $id);

            return $this->db->get();
        } catch (Exception $e) {
            throw $e;
        }
    }

    function update() {
        try {
            $this->db->set('check_in', $this->check_in);
            $this->db->set('check_out', $this->check_out);

            $this->db->where('id', $this->id);

            $this->db->update('schedule');
        } catch (Exception $e) {
            throw $e;
        }
    }

    function delete($id) {
        try {
            $this->db->where('id', $id);
            $this->db->delete();
        } catch (Exception $e) {
            throw $e;
        }
    }

    function list_all($limit, $offset) {
        try {
            $this->db->select("schedule.id, schedule.check_in, schedule.check_out, schedule.user_id, 
				user.username, user.first_name, user.last_name, 
				CONCAT(user.first_name, ' ' ,user.last_name) as full_name,
				TIMEDIFF(schedule.check_out, schedule.check_in) as  total_time", FALSE);
            $this->db->from('schedule');
            $this->db->join('user', 'user.id = schedule.user_id');
            $this->db->limit($limit, $offset);

            return $this->db->get();
        } catch (Exception $e) {
            throw $e;
        }
    }

    function list_by_user($limit, $offset, $user_id) {
        try {
            $this->db->select("schedule.id, schedule.check_in, schedule.check_out, schedule.user_id, 
				user.username, user.first_name, user.last_name, 
				CONCAT(user.first_name, ' ' ,user.last_name) as full_name,
				TIMEDIFF(schedule.check_out, schedule.check_in) as  total_time", FALSE);
            $this->db->from('schedule');
            $this->db->join('user', 'user.id = schedule.user_id');
            $this->db->limit($limit, $offset);

            $this->db->where('user.id', $user_id);

            return $this->db->get();
        } catch (Exception $e) {
            throw $e;
        }
    }

    function search($keyword) {
        try {
            $this->db->select("schedule.id, schedule.check_in, schedule.check_out, schedule.user_id, 
				user.id, user.username, user.first_name, user.last_name, 
				CONCAT(user.first_name, ' ' ,user.last_name) as full_name,
				TIMEDIFF(schedule.check_out, schedule.check_in) as  total_time", FALSE);
            $this->db->from('schedule');
            $this->db->join('user', 'user.id = schedule.user_id');

            $this->db->like('user.username', $keyword);
            $this->db->or_like('user.first_name', $keyword);
            $this->db->or_like('user.last_name', $keyword);
            $this->db->or_like('user.email', $keyword);

            return $this->db->get();
        } catch (Exception $e) {
            throw $e;
        }
    }

}

?>