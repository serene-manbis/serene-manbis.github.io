<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meditasi extends CI_Controller {
	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('meditasi');
		$this->load->view('template/footer');
	}
}
