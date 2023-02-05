<?php

class Model_cadastro extends CI_Model {

    // Campos da tabela produtos no database loja
    public $id;
    public $email;
    public $senha;

    public function get_produtos()
    {
        $query = $this->db->get('produtos');
        return $query->result();
    }
}

?>