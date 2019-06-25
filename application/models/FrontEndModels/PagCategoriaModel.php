<?php

class PagCategoriaModel extends CI_Model{
    
    public function getAll($id_categoria) {
        //nome da tabela no DB
        $this->db->select('tb_categoria.*,tb_produto.*,tb_unidade_medida.medida,tb_medida_valor.medida_valor');
        $this->db->join('tb_categoria','tb_categoria.id_categoria = tb_produto.cd_categoria', 'left');
        $this->db->join('tb_unidade_medida', 'tb_unidade_medida.id_medida = tb_produto.cd_unidade_medida', 'left');
        $this->db->join('tb_medida_valor', 'tb_medida_valor.id_medida_valor = tb_produto.cd_medida_valor', 'left');
        $this->db->where('id_categoria', $id_categoria);
        $query = $this->db->get('tb_produto');
        return $query->result();
    }
}
