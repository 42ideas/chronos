<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Costumers extends CI_Controller {
	public function index()
	{
		$this->load->view('costumers/list');
	}
}