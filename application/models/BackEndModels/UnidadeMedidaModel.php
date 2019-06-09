<?php

class UnidadeMedidaModel extends CI_Model {
    
    public function getAll() {
        //nome da tabela no DB
        $query = $this->db->get('tb_unidade_medida');
        return $query->result();
    }
}
