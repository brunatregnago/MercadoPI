<?php

class PagInicialModel extends CI_Model {

    public function getAll() {
        //nome da tabela no DB

        $this->db->select('tb_produto.*,tb_unidade_medida.medida, tb_medida_valor.medida_valor, tb_departamento.id_departamento, tb_departamento.nome_departamento as departamento, tb_categoria.*');
        $this->db->join('tb_departamento', 'tb_departamento.id_departamento = tb_produto.cd_departamento', 'left');
        $this->db->join('tb_categoria', 'tb_categoria.id_categoria = tb_produto.cd_categoria', 'left');
        $this->db->join('tb_unidade_medida', 'tb_unidade_medida.id_medida = tb_produto.cd_unidade_medida', 'left');
        $this->db->join('tb_medida_valor', 'tb_medida_valor.id_medida_valor = tb_produto.cd_medida_valor', 'left');
        $query = $this->db->get('tb_produto');
        return $query->result();
    }

}
