<?php

class DepartamentoInicialModelT extends CI_Model{
    
    public function getAll() {
        //nome da tabela no DB
        $this->db->select('tb_departamento.*');
        $this->db->order_by('id_departamento', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('tb_departamento');
        return $query->result();
    }
}
