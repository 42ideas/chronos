<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        //$this->load->model('Worklog_model');
        //$this->load->model('Customer_model');
        //$this->load->model('Project_model');
        $this->load->model('User_model');
        //$this->load->model('Schedule_model');
        $this->load->helper('form');
    }
    
    public function index() {

        $data['page_title'] = "Login";
        $data['active_link'] = "";

        $this->load->view('inc/header', $data);
        $this->load->view('index', $data);
        $this->load->view('inc/footer', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */