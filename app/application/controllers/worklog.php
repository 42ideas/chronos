<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Worklog extends CI_Controller {
	public function index()
	{
		$this->load->view('worklog/list');
	}
}