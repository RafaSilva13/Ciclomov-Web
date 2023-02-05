<?php

class Model_login extends CI_Model {

    // Campos da tabela produtos no database loja
    public $id;
    public $email;
    public $senha;

    public function verificarLogin()
    {
        $query = $this->db->get('produtos');
        return $query->result();
    }
}

?>