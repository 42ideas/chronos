<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Schedule extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Schedule_model');
	}

	public function index()
	{
		$data['page_title'] = "Schedule list";
		$data['active_link'] = "schedule-menu";
		
		$data['checkins'] = $this->Schedule_model->list_all(MAX_RECORDS_PER_PAGE, 0);

		$this->load->view('inc/header', $data);
		$this->load->view('schedule/list', $data);
		$this->load->view('inc/footer', $data);
	}
}