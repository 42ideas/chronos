<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('User_model');
	}

	public function index()
	{
		$data['page_title'] = "User list";
		$data['active_link'] = "user-menu";
		$data['users'] = $this->User_model->list_all(MAX_RECORDS_PER_PAGE, 0);


		$this->load->view('inc/header', $data);
		$this->load->view('user/list', $data);
		$this->load->view('inc/footer', $data);
	}
        
        public function create()
        {
            $data['page_title'] = "Create New User";
            $data['active_link'] = "user-menu";
            $this->load->helper('form');
            
            $this->load->view('inc/header', $data);
            $this->load->view('user/create', $data);
            $this->load->view('inc/footer', $data);
        }
        
        public function create_user()
        {
            $this->load->library('firephp');
            $data['page_title'] = "User list";
            $data['active_link'] = "user-menu";
            $this->firephp->trace($_POST['username']);
            $this->User_model->username = $_POST['username'];
            $this->User_model->password = $_POST['password'];
            $this->User_model->first_name = $_POST['first_name'];
            $this->User_model->last_name = $_POST['last_name'];
            $this->User_model->email = $_POST['email'];
            $this->User_model->role = $_POST['role'];
            $this->User_model->create();
            
            $data['users'] = $this->User_model->list_all(MAX_RECORDS_PER_PAGE, 0);
            
            $this->load->view('inc/header', $data);
            $this->load->view('user/list', $data);
            $this->load->view('inc/footer', $data);
        }
}