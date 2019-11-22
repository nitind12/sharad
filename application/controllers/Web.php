<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('index');
		$this->load->view('templates/footer');
	}
}
