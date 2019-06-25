<?php

class PagProdutoEspecificoModel extends CI_Model {

    public function getAll($id_produto) {
        //nome da tabela no DB
        $this->db->select('tb_produto.*,tb_unidade_medida.medida as medida, tb_medida_valor.medida_valor as medida_valor');
        $this->db->join('tb_departamento', 'tb_departamento.id_departamento = tb_produto.cd_departamento', 'left');
        $this->db->join('tb_categoria', 'tb_categoria.id_categoria = tb_produto.cd_categoria', 'left');
        $this->db->join('tb_subcategoria', 'tb_subcategoria.id_subcategoria = tb_produto.cd_subcategoria', 'left');
        $this->db->join('tb_unidade_medida', 'tb_unidade_medida.id_medida = tb_produto.cd_unidade_medida', 'left');
        $this->db->join('tb_medida_valor', 'tb_medida_valor.id_medida_valor = tb_produto.cd_medida_valor', 'left');
        $this->db->where('id_produto', $id_produto);
        $query = $this->db->get('tb_produto');
        return $query->result();
    }
}
