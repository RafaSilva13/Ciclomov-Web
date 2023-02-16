<?php

class Model_servico extends CI_Model {

    public function cadastrarServico($id_ponto, $tempo, $tipo)
    {
        $dados = array(
            "id_clientes" => $_SESSION['user'],
            "id_ponto" => $id_ponto,
            "tipo" => $tipo,
            "tempo_permanencia" => $tempo
        );

        $this->db->insert('servicos',$dados);
    }
}

?>