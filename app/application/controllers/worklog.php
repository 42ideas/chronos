<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Worklog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Worklog_model');
	}

	public function index()
	{
		$data['page_title'] = "Worklog list";
		$data['active_link'] = "worklog-menu";
		$data['logs'] = $this->Worklog_model->list_all(MAX_RECORDS_PER_PAGE, 0);

		$this->load->view('inc/header', $data);
		$this->load->view('worklog/list', $data);
		$this->load->view('inc/footer', $data);
	}
}