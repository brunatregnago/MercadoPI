<?php

class MedidaValorModel extends CI_Model {
    
    public function getAll() {
        //nome da tabela no DB
        $query = $this->db->get('tb_medida_valor');
        return $query->result();
    }
}
