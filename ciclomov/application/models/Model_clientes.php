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

    public function addTempoCliente($usuario)
    {
        $query = $this->db->get_where('servicos', array('id_clientes' => $usuario, 'status' => 1));

        if ($query->result()) 
        {            
            foreach ($query->result() as $row)
            {
                $tempo = $row->valorTempo;
            }
        }

        $this->db->set('tempo_geral_clientes', 'tempo_geral_clientes+'.$tempo, FALSE);
        $this->db->where('cod_clientes', $usuario);
        $this->db->update('clientes'); // gives UPDATE mytable SET field = field+1 WHERE id = 2

    }
}

?>