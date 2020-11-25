<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musik extends CI_Controller {
	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('musik');
		$this->load->view('template/footer');
	}
}
