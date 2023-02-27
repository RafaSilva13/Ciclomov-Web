<?php

class Model_clientes extends CI_Model {

    public function verificarImagem($user)
    {
        $this->db->select('imagem_perfil');
        $query = $this->db->get_where('clientes', array('cod_clientes ' => $user));

        return $query->result();
    }

    public function atualizarImagem($nomeImagem, $user)
    {
        $dado = array(
            "imagem_perfil" => $nomeImagem
        );

        $this->db->where('cod_clientes', $user);
        $this->db->update('clientes', $dado);

        return $nomeImagem;
    }
}

?>