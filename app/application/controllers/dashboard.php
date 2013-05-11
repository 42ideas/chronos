<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->session->is_logged_in();
        $this->load->model('Worklog_model');
        //$this->load->model('Customer_model');
        //$this->load->model('Project_model');
        //$this->load->model('User_model');
        $this->load->model('Schedule_model');
    }
    
    public function index() {

        $data['page_title'] = "Dashboard";
        $data['active_link'] = "";
        
        $data['schedules'] = $this->Schedule_model->list_by_user(5, 0, $this->session->userdata('user_id'));
        $data['logs'] = $this->Worklog_model->list_by_user(5, 0, $this->session->userdata('user_id'));

        $this->load->view('inc/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('inc/footer', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */