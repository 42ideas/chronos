<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Worklog_model');
        //$this->load->model('Customer_model');
        //$this->load->model('Project_model');
        $this->load->model('User_model');
        $this->load->model('Schedule_model');
        $this->load->helper('form');
    }

    public function index() {

        $data['page_title'] = "Login";
        $data['active_link'] = "";
        
        $this->load->view('inc/header', $data);
        $this->load->view('login/index', $data);
        $this->load->view('inc/footer', $data);
    }

    public function validate() {
        $query = $this->User_model->validate();
        if ($query != -1 && $query != null) {
            $sessionData = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true,
                'user_id' => $query->id,
                'role' => $query->role,
                'full_name' => $query->first_name . ' ' . $query->last_name
            );
            
            $this->session->set_userdata($sessionData);
            
            $data['page_title'] = "Dashboard";
            $data['active_link'] = "";

            $data['schedules'] = $this->Schedule_model->list_by_user(5, 0, 1);
            $data['logs'] = $this->Worklog_model->list_by_user(5, 0, 1);

            redirect('dashboard/index');
        } else {
            $this->index();
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */