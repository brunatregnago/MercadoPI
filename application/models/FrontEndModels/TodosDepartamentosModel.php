<?php

class TodosDepartamentosModel extends CI_Model{
    
    public function getAll() {
        
        $this->db->select('tb_departamento.*, tb_categoria.*');
        $this->db->join('tb_departamento', 'tb_departamento.id_departamento = tb_categoria.cd_departamento', 'left');
        $query = $this->db->get('tb_categoria');
        return $query->result();
    }
}
