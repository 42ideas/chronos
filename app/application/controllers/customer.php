<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->session->is_logged_in();
        $this->load->model('Customer_model');
        $this->load->helper('form');
    }

    public function index() {
        $data['page_title'] = "Customer list";
        $data['active_link'] = "customer-menu";

        $data['customers'] = $this->Customer_model->list_all(MAX_RECORDS_PER_PAGE, 0);

        $this->load->view('inc/header', $data);
        $this->load->view('customer/list', $data);
        $this->load->view('inc/footer', $data);
    }

    public function detail($id) {
        $data['page_title'] = "Edit Customer";
        $data['active_link'] = "customer-menu";
        $data['customer'] = $this->Customer_model->read($id);

        $this->load->view('inc/header', $data);
        $this->load->view('customer/detail', $data);
        $this->load->view('inc/footer', $data);
    }

    public function edit_customer() {
        $this->Customer_model->name = $_POST['name'];
        $this->Customer_model->description = $_POST['description'];
        $this->Customer_model->id = $_POST['id'];
        
        $this->Customer_model->update();

        $this->index();
    }

    public function create() {
        $data['page_title'] = "Create New Customer";
        $data['active-link'] = "customer-menu";
        $this->load->helper('form');

        $this->load->view('inc/header', $data);
        $this->load->view('customer/create', $data);
        $this->load->view('inc/footer', $data);
    }

    public function create_customer() {
        $data['page_title'] = "Customer list";
        $data['active_link'] = "customer-menu";
        
        $this->Customer_model->name = $_POST['name'];
        $this->Customer_model->description = $_POST['description'];
        $this->Customer_model->create();

        $this->index();
    }
    
    public function delete($id) {
        $this->Customer_model->delete($id);
        
        $this->index();
    }

}