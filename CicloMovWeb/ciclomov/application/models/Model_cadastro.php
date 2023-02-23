<?php

class Model_cadastro extends CI_Model {

    public function cadastrarUsuario($cadNome, $cadCpf, $cadUsuario, $cadEmail, $cadTelefone, $cadSenha)
    {
        $dados = array(
            "email_clientes" => $cadEmail,
            "cpf_clientes" => $cadCpf,
            "tempo_geral_clientes" => '00:00:00',
            "usuario_clientes" => $cadUsuario,
            "senha_clientes" => $cadSenha,
            "nome_clientes" => $cadNome,
            "telefone_clientes" => $cadTelefone
        );

        return $this->db->insert('clientes', $dados);
    }
}

?>