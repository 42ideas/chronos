<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Project extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->session->is_logged_in();
        $this->load->model('Project_model');
        $this->load->model('Customer_model');
        $this->load->helper('form');
    }

    public function index() {
        $data['page_title'] = "Project list";
        $data['active_link'] = "project-menu";

        $data['projects'] = $this->Project_model->list_all(MAX_RECORDS_PER_PAGE, 0);

        $this->load->view('inc/header', $data);
        $this->load->view('project/list', $data);
        $this->load->view('inc/footer', $data);
    }
    
    public function detail($id) {
        $data['page_title'] = "Edit Project";
        $data['active_link'] = "project-menu";
        
        $data['project'] = $this->Project_model->read($id);

        $this->load->view('inc/header', $data);
        $this->load->view('project/detail', $data);
        $this->load->view('inc/footer', $data);
    }
    
    public function edit_project() {
        $this->Project_model->name = $_POST['name'];
        $this->Project_model->description = $_POST['description'];
        $this->Project_model->id = $_POST['id'];
        $this->Project_model->update();

        $this->index();
    }

    public function create() {
        $this->load->helper('form');

        $data['page_title'] = "New Project";
        $data['active_link'] = "project-menu";

        $data['customer_list'] = $this->Customer_model->list_all(MAX_RECORDS_PER_PAGE, 0);

        $this->load->view('inc/header', $data);
        $this->load->view('project/create', $data);
        $this->load->view('inc/footer', $data);
    }

    public function create_project() {
        $this->Project_model->name = $_POST['name'];
        $this->Project_model->description = $_POST['description'];
        $this->Project_model->customer_id = $_POST['customer'];
        $this->Project_model->create();
        
        $this->index();
    }

}