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
        $query = $this->db->get('pontos');
        return $query->result();
    }

    public function atualizarPonto($id_ponto){

        $query = $this->db->get_where('pontos', array('cod_ponto' => $id_ponto));

        if ($query->result()) 
        {            
            foreach ($query->result() as $row)
            {
                $vagas = $row->vagas_livres_ponto;
            }
        }

        $dado = array(
            "vagas_livres_ponto" => $vagas-1
        );

        $this->db->where('cod_ponto', $id_ponto);
        $this->db->update('pontos', $dado);
    }

    public function addPonto($user){
        $query = $this->db->get_where('servicos', array('id_clientes' => $user, 'status' => 1));

        if ($query->result()) 
        {            
            foreach ($query->result() as $row)
            {
                $codigo = $row->id_ponto;
            }
        }

        $query2 = $this->db->get_where('pontos', array('cod_ponto' => $codigo));

        if ($query2->result()) 
        {            
            foreach ($query2->result() as $row)
            {
                $vagas = $row->vagas_livres_ponto;
            }
        }

        $dado = array(
            "vagas_livres_ponto" => $vagas+1
        );

        $this->db->where('cod_ponto', $codigo);
        $this->db->update('pontos', $dado);
        
    }
}

?>