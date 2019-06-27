<?php

class PagDepartamentoModel extends CI_Model {

    public function getAll($id_departamento) {
        //nome da tabela no DB
        $this->db->select('tb_departamento.*,tb_categoria.*');
        $this->db->join('tb_departamento', 'tb_departamento.id_departamento = tb_categoria.cd_departamento', 'left');
        $this->db->where('id_departamento', $id_departamento);
        $query = $this->db->get('tb_categoria');
        return $query->result();
    }

}
