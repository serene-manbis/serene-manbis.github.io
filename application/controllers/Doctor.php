<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('doctor');
		$this->load->view('template/footer');
	}
}