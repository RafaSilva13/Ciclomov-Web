<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('view_header');
		$this->load->view('view_navbar');
		$this->load->view('view_login');
		$this->load->view('view_home');
		$this->load->view('view_footer');
	}

	public function pontos()
	{
		$this->load->helper('url');
		$this->load->view('view_header');
		$this->load->view('view_navbar');
		$this->load->view('view_login');
		$this->load->view('view_pontos');
		$this->load->view('view_footer');
	}

}
