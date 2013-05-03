<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Customer_model');
	}

	public function index()
	{
		$data['page_title'] = "Customer list";
		$data['active_link'] = "customer-menu";

		$data['customers'] = $this->Customer_model->list_all(MAX_RECORDS_PER_PAGE, 0);
		
		$this->load->view('inc/header', $data);
		$this->load->view('customer/list', $data);
		$this->load->view('inc/footer', $data);
	}
        
        public function create()
        {
            $data['page_title'] = "Create New Customer";
            $data['active-link'] = "customer-menu";
            $this->load->helper('form');
            
            $this->load->view('inc/header', $data);
            $this->load->view('customer/create', $data);
            $this->load->view('inc/footer', $data);
        }
        
        public function create_customer()
        {
            $data['page_title'] = "Customer list";
            $data['active_link'] = "customer-menu";
            $this->Customer_model->name = $_POST['name'];
            $this->Customer_model->description = $_POST['description'];
            $this->Customer_model->create();
            
            $data['customers'] = $this->Customer_model->list_all(MAX_RECORDS_PER_PAGE, 0);
            
            $this->load->view('inc/header', $data);
            $this->load->view('customer/list', $data);
            $this->load->view('inc/footer', $data);
        }
}