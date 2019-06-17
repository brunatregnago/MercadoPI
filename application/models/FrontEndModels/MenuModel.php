<?php

class MenuModel extends CI_Model{
    
    public function getAll() {
        //nome da tabela no DB
        $this->db->select('tb_departamento.id_departamento, tb_departamento.nome_departamento as departamento');
        $query = $this->db->get('tb_departamento');
        return $query->result();
    }
    
}
