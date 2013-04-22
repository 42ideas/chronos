<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Project_model');
	}

	public function index()
	{
		$data['page_title'] = "Project list";
		$data['active_link'] = "project-menu";
		
		$data['projects'] = $this->Project_model->list_all(MAX_RECORDS_PER_PAGE, 0);

		$this->load->view('inc/header', $data);
		$this->load->view('project/list', $data);
		$this->load->view('inc/footer', $data);
	}

}