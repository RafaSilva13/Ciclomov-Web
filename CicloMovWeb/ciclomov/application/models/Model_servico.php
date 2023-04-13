<?php

class Model_servico extends CI_Model {

    public function cadastrarServico($id_ponto, $tempo, $tipo, $valorTempo)
    {
        $dados = array(
            "id_clientes" => $_SESSION['user'],
            "id_ponto" => $id_ponto,
            "tipo" => $tipo,
            "tempo_permanencia" => $tempo,
            "valorTempo" => $valorTempo,
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
            return 0;
        }

    }

    public function terminarServico($user)
    {
        $query = $this->db->get_where('servicos', array('id_clientes' => $user, 'status' => 1));

        if ($query->result()) 
        {            
            foreach ($query->result() as $row)
            {
                $codigo = $row->cod_servico;
            }
        }

        $dado = array(
            "status" => 0
        );

        $this->db->where('cod_servico', $codigo);
        $this->db->update('servicos', $dado);

    }

    public function listarServicos($user)
    {
        $query = $this->db->query('SELECT cod_servico, descricao, tipo, tempo_permanencia, valorTempo, status FROM servicos A INNER JOIN clientes B INNER JOIN pontos C ON A.id_clientes = B.cod_clientes AND A.id_ponto = C.cod_ponto WHERE id_clientes = ? ORDER BY status DESC', array($user));
        
        return $query->result();

    }

}

?>