<?php

class PagCategoriaModel extends CI_Model{
    
    public function getAll($id_categoria) {
        //nome da tabela no DB
        $this->db->select('tb_departamento.*,tb_categoria.*, tb_subcategoria.*');
        $this->db->join('tb_categoria', 'tb_categoria.id_categoria = tb_subcategoria.cd_categoria','left');
        $this->db->join('tb_departamento', 'tb_departamento.id_departamento = tb_categoria.cd_departamento', 'left');
        $this->db->where('id_categoria', $id_categoria);
        $query = $this->db->get('tb_subcategoria');
        return $query->result();
    }
}
