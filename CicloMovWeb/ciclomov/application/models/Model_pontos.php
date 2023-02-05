<?php

class Model_pontos extends CI_Model {

    // Campos da tabela pontos loja
    public $cod;
    public $vagasLivres;
    public $vagasTotais;
    public $descricao;
    public $mapa;

    public function selectPonto()
    {
        $query = $this->db->query("SELECT * FROM pontos");
        
        return $query->result();
    }
}

?>