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
		$this->load->view('view_servico');
		$this->load->view('view_pontos');
		$this->load->view('view_footer');
	}
	
	public function sobre()
	{
		$this->load->helper('url');
		$this->load->view('view_header');
		$this->load->view('view_navbar');
		$this->load->view('view_login');
		$this->load->view('view_sobre');
		$this->load->view('view_footer');
	}

	// public function login() 
	// {
	// 	$usuario = $this->input->post('usuario');
	// 	$senha = $this->input->post('senha');

	// 	echo $usuario;
	// 	echo $senha;
	// }

	//public function cadastrar() 
	// {

	// 	$nome = $this->input->post('nome');
	// 	$usuario2 = $this->input->post('usuario');
	// 	$email = $this->input->post('email');
	// 	$senha2 = $this->input->post('senha');

	// 	
	// }
}
