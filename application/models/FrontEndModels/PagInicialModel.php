<?php

class PagInicialModel extends CI_Model{
    
    public function getAll() {
        //nome da tabela no DB
        $query = $this->db->get('tb_produto');
        return $query->result();
    }
}
