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
}