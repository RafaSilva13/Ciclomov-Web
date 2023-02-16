<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Inicia sessão
session_start();

class Geral extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('view_header');
		$this->load->view('view_navbar');
		$this->load->view('view_login');
		$this->load->view('view_toast');
		$this->load->view('view_home');
		$this->load->view('view_footer');
	}

	public function pontos()
	{
		$this->load->model('Model_pontos');
		$pontos = $this->Model_pontos->selectPonto();
		
        foreach ($pontos as $n => $row) 
        { 
            $ponto[$n] = [
                'cod' => $row->cod_ponto,
                'vagasLivres' => $row->vagas_livres_ponto,
                'vagasTotais' => $row->vagas_totais_ponto,
                'descricao' => $row->descricao,
                'mapa' => $row->mapa
			];
        }

		$dados['pontos'] = $ponto;

		$this->load->helper('url');
		$this->load->view('view_header');
		$this->load->view('view_navbar');
		$this->load->view('view_login');
		$this->load->view('view_toast');
		$this->load->view('view_servico');
		$this->load->view('view_pontos', $dados);
		$this->load->view('view_footer');
	}
	
	public function sobre()
	{
		$this->load->helper('url');
		$this->load->view('view_header');
		$this->load->view('view_navbar');
		$this->load->view('view_login');
		$this->load->view('view_toast');
		$this->load->view('view_sobre');
		$this->load->view('view_footer');
	}

	public function login() 
	{

		$usuario = $this->input->post('usuario');
		$senha = $this->input->post('senha');
		
		$this->load->model('Model_login');
		
		$confirmacao = $this->Model_login->verificarLogin($usuario, $senha);

		if($confirmacao == "#erro")
		{
			echo "SenhaUserIn";
		}
		else
		{
			echo $confirmacao;
		}
	}
	

	public function cadastro() 
	{
		$cadNome = $this->input->post('cad_nome_completo');
		$cadCpf = $this->input->post('cad_cpf');
		$cadUsuario = $this->input->post('cad_usuario');
		$cadEmail = $this->input->post('cad_email');
		$cadTelefone = $this->input->post('cad_telefone');
		$cadSenha = $this->input->post('cad_senha');

		$this->load->model('Model_cadastro');
		$confirmacao2 = $this->Model_cadastro->cadastrarUsuario($cadNome, $cadCpf, $cadUsuario, $cadEmail, $cadTelefone, $cadSenha);
		
		echo $confirmacao2;
	}

	public function servico($id_cliente, $id_ponto, $tempo, $tipo){

	}
}
