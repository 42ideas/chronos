<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Schedule extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->session->is_logged_in();
        $this->load->model('Schedule_model');
        $this->load->model('User_model');
        $this->load->helper('form');
    }

    public function index() {
        $data['page_title'] = "Schedule list";
        $data['active_link'] = "schedule-menu";

        $data['checkins'] = $this->Schedule_model->list_all(MAX_RECORDS_PER_PAGE, 0);
        $this->load->library('firephp');

        $this->firephp->log($data['checkins']->result());
        //$this->firephp->trace('hola');
        
        $this->load->view('inc/header', $data);
        $this->load->view('schedule/list', $data);
        $this->load->view('inc/footer', $data);
    }
    
    public function detail($id) {
        $data['page_title'] = "Edit Schedule";
        $data['active_link'] = "schedule-menu";
        
        $data['schedule'] = $this->Schedule_model->read($id);
        
        $this->load->view('inc/header', $data);
        $this->load->view('schedule/detail', $data);
        $this->load->view('inc/footer', $data);
    }
    
    public function edit_schedule() {
        $check_in = strtotime($_POST['check_in']);
        $check_in_formatted = date("Y-m-d H:i:s", $check_in);
        
        $this->Schedule_model->check_in = $check_in_formatted;
        
        $check_out = strtotime($_POST['check_out']);
        $check_out_formatted = date("Y-m-d H:i:s", $check_out);
        
        $this->Schedule_model->check_out = $check_out_formatted;
        
        $this->Schedule_model->id = $_POST['id'];
        
        $this->Schedule_model->update();
        
        $this->index();
    }

    public function create() {
        $this->load->helper('form');

        $data['page_title'] = "New Schedule";
        $data['active_link'] = "schedule-menu";

        $data['user_list'] = $this->User_model->list_all(MAX_RECORDS_PER_PAGE, 0);

        $this->load->view('inc/header', $data);
        $this->load->view('schedule/create', $data);
        $this->load->view('inc/footer', $data);
    }

    public function create_schedule() {
        $check_in = strtotime($_POST['check_in']);
        $check_in_formatted = date("Y-m-d H:i:s", $check_in);
        
        $this->Schedule_model->check_in = $check_in_formatted;
        
        $check_out = strtotime($_POST['check_out']);
        $check_out_formatted = date("Y-m-d H:i:s", $check_out);
        
        $this->Schedule_model->check_out = $check_out_formatted;
        
        $this->Schedule_model->user_id = $this->session->userdata('user_id');
        $this->Schedule_model->create();

        $this->index();
    }
    
    public function check_in() {
        $check_in_formatted = date("Y-m-d H:i:s");
        
        $this->load->library("firephp");
        
        $this->Schedule_model->check_in = $check_in_formatted;
        $this->Schedule_model->user_id = $this->session->userdata('user_id');
        
        $this->firephp->log($this->session->userdata('user_id'));
        
        $this->Schedule_model->create();
        
        $this->index();
    }
}