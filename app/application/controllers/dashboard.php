<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{

		$data['page_title'] = "Dashboard";
		$data['active_link'] = "";
		
		$this->load->view('inc/header', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('inc/footer', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */