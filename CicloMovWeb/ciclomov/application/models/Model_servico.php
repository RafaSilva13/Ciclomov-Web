<?php

class Model_servico extends CI_Model {

    public function cadastrarServico($id_ponto, $tempo, $tipo)
    {
        $dados = array(
            "id_clientes" => $_SESSION['user'],
            "id_ponto" => $id_ponto,
            "tipo" => $tipo,
            "tempo_permanencia" => $tempo,
            "status" => 1
        );

        $this->db->insert('servicos',$dados);
    }

    public function verificarStatus($user)
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
            return '#erro';
        }
    }
}

?>