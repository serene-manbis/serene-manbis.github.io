<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yoga extends CI_Controller {
	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('yoga');
		$this->load->view('template/footer');
	}
}
