<?php


class DepartamentoMenuModel extends CI_Model {

    public function getAll() {
        //nome da tabela no DB
        $this->db->select('tb_departamento.*');
        $this->db->limit(6);
        $query = $this->db->get('tb_departamento');
        return $query->result();
    }

}
