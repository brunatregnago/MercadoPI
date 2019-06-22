<?php

class TodosDepartamentosModel extends CI_Model{
    
    public function getAll() {
        
        $this->db->select('tb_departamento.*');
        $this->db->order_by('id_departamento', 'desc');
        $query = $this->db->get('tb_departamento');
        return $query->result();
    }
}
