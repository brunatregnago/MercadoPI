<?php

class PagPromocaoModel extends CI_Model {

    public function getAll() {
        //nome da tabela no DB
        $this->db->select('tb_produto.*,tb_unidade_medida.medida, tb_medida_valor.medida_valor,tb_promocao.*');
        $this->db->join('tb_produto_promocao', 'tb_produto_promocao.cd_promocao = tb_promocao.id_promocao');
        $this->db->join('tb_produto', 'tb_produto.id_produto= tb_produto_promocao.cd_produto', 'right');
        $this->db->join('tb_unidade_medida', 'tb_unidade_medida.id_medida = tb_produto.cd_unidade_medida', 'left');
        $this->db->join('tb_medida_valor', 'tb_medida_valor.id_medida_valor = tb_produto.cd_medida_valor', 'left');
        $this->db->group_by('cd_promocao');
        $query = $this->db->get('tb_promocao');
        return $query->result();
    }

}
