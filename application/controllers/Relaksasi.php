<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relaksasi extends CI_Controller {
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('relaksasi');
		$this->load->view('template/footer');
	}
}
