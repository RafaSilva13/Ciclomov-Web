<?php

class Model_login extends CI_Model {

    public function verificarLogin($email, $password)
    {   
        $query = $this->db->get_where('clientes', array('email_clientes' => $email, 'senha_clientes' => $password));

        if ($query->result()) 
        {
            foreach ($query->result() as $row)
            {
                return $row->cod_clientes;
            }
        } 
        else 
        {
            return 'erro';
        }
    }
}

?>