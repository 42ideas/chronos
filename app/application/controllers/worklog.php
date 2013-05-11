<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Worklog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->session->is_logged_in();
        $this->load->model('Worklog_model');
        $this->load->model('Customer_model');
        $this->load->model('Project_model');
        $this->load->model('User_model');
        $this->load->helper('form');
    }

    public function index() {
        $data['page_title'] = "Worklog list";
        $data['active_link'] = "worklog-menu";

        $data['logs'] = $this->Worklog_model->list_all(MAX_RECORDS_PER_PAGE, 0);

        $this->load->view('inc/header', $data);
        $this->load->view('worklog/list', $data);
        $this->load->view('inc/footer', $data);
    }
    
    public function detail($id) {
        $data['page_title'] = "Edit Work Log";
        $data['active_link'] = "worklog-menu";
        
        $data['worklog'] = $this->Worklog_model->read($id);
        
        $data['project_list'] = $this->Project_model->list_all(MAX_RECORDS_PER_PAGE, 0);

        $this->load->view('inc/header', $data);
        $this->load->view('worklog/detail', $data);
        $this->load->view('inc/footer', $data);
    }
    
    public function edit_worklog() {
        $this->Worklog_model->description = $_POST['description'];
        $this->Worklog_model->project_id = $_POST['project_id'];
        $project = $this->Project_model->read($_POST['project_id']);
        $this->Worklog_model->customer_id = $project->result()[0]->customer_id;
        
        
        $start_time = strtotime($_POST['date'] . ' ' .$_POST['start_time']);
        $start_time_formatted = date("Y-m-d H:i", $start_time);
        
        $this->Worklog_model->start_time = $start_time_formatted;
        
        $end_time = strtotime($_POST['date'] . ' ' .$_POST['end_time']);
        $end_time_formatted = date("Y-m-d H:i", $end_time);
        
        $this->Worklog_model->end_time = $end_time_formatted;
        $this->Worklog_model->id = $_POST['id'];
        
        //Need to change this when login is made
        $this->Worklog_model->user_id = 1; //$this->GetCurrentUser();
        
        
        $this->Worklog_model->update();

        $this->index();
    }

    public function create() {
        $this->load->helper('form');

        $data['page_title'] = "New Worklog";
        $data['active_link'] = "worklog-menu";

        //$data['customer_list'] = $this->Customer_model->list_all(MAX_RECORDS_PER_PAGE, 0);
        $data['project_list'] = $this->Project_model->list_all(MAX_RECORDS_PER_PAGE, 0);
        //$data['user_list'] = $this->User_model->list_all(MAX_RECORDS_PER_PAGE, 0);

        $this->load->view('inc/header', $data);
        $this->load->view('worklog/create', $data);
        $this->load->view('inc/footer', $data);
    }

    public function create_worklog() {
        $this->load->library("firephp");
        $this->Worklog_model->description = $_POST['description'];
        $this->Worklog_model->project_id = $_POST['project_id'];
        $project = $this->Project_model->read($_POST['project_id']);
        $this->Worklog_model->customer_id = $project->result()[0]->customer_id;
        
        
        $start_time = strtotime($_POST['date'] . ' ' .$_POST['start_time']);
        $start_time_formatted = date("Y-m-d H:i", $start_time);
        
        $this->Worklog_model->start_time = $start_time_formatted;
        
        $end_time = strtotime($_POST['date'] . ' ' .$_POST['end_time']);
        $end_time_formatted = date("Y-m-d H:i", $end_time);
        
        $this->Worklog_model->end_time = $end_time_formatted;
        
        //Need to change this when login is made
        $this->Worklog_model->user_id = 1; //$this->GetCurrentUser();
        
        $this->Worklog_model->create();
        
        $this->index();
    }
}