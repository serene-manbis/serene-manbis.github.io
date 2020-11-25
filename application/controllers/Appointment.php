<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('buatjanji');
		$this->load->view('template/footer');
	}
}