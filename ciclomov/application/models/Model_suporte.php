<?php

    class Model_suporte extends CI_Model {

        public function abrirChamado($user)
        {
            $dados = array(
                "id_cliente" => $user,
                "id_administrador" => null,
                "status" => 1
            );

            $this->db->insert('solicitacoes', $dados);
        } 

        public function verificarChamados($user)
        {
            $query = $this->db->get_where('solicitacoes', array('id_cliente' => $user, 'status' => 1));

            if ($query->result()) 
            {            
                return 1;
            } 
            else 
            {
                return 0;
            }
        }

        public function retornarConversas($user)
        {
            $query = $this->db->get_where('servicos', array('id_clientes' => $user, 'status' => 1));

            if ($query->result()) 
            {            
                foreach ($query->result() as $row)
                {
                    return $row->tempo_permanencia;
                }
            } 
            else 
            {
                return 0;
            }
        }
    }

?>