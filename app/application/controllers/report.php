<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {
	public function __construct() {
            parent::__construct();
            $this->session->is_logged_in();
        }
	public function index()
	{
		$data['page_title'] = "Report list";
		$data['active_link'] = "report-menu";
		
		$this->load->view('inc/header', $data);
		$this->load->view('report/list', $data);
		$this->load->view('inc/footer', $data);
	}
}