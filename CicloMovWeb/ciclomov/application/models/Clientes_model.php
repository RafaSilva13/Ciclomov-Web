<?php
class Clientes_model extends CI_Model {

    public $cod_clientes;
    public $email_clientes;
    public $cpf_clientes;
    public $tempo_geral_clientes;
    public $usuario_clientes;
    public $senha_clientes;
    public $nome_clientes;
    public $telefone_clientes;

    public function selectData()
    {
        $query = $this->db->get('emailClientes', 1);
        return $query->result();
    }

    public function insertData()
    {
        $this->cod_clientes = $this->input->get('cod');

        $this->email_clientes = $this->input->get('email');

        $this->cpf_clientes = $this->input->get('cpf');

        $this->tempo_geral_clientes = 0;

        $this->usuario_clientes = $this->input->get('usuario');

        $this->senha_clientes = $this->input->get('senha');

        $this->nome_clientes = $this->input->get('nome');

        $this->telefone_clientes = $this->input->get('telefone');

        $this->db->insert('entries', $this);
    }

}
?>