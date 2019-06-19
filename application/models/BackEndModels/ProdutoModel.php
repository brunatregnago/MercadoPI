<?php

class ProdutoModel extends CI_Model {

    public function getAll() {
        //nome da tabela no DB
        $this->db->select('tb_produto.*,tb_unidade_medida.medida as medida, tb_medida_valor.medida_valor as medida_valor,tb_departamento.nome_departamento as departamento, tb_categoria.nome_categoria as categoria,  tb_subcategoria.nome_subcategoria as subcategoria');
        $this->db->join('tb_departamento', 'tb_departamento.id_departamento = tb_produto.cd_departamento', 'left');
        $this->db->join('tb_categoria', 'tb_categoria.id_categoria = tb_produto.cd_categoria', 'left');
        $this->db->join('tb_subcategoria', 'tb_subcategoria.id_subcategoria = tb_produto.cd_subcategoria', 'left');
        $this->db->join('tb_unidade_medida', 'tb_unidade_medida.id_medida = tb_produto.cd_unidade_medida', 'left');
        $this->db->join('tb_medida_valor', 'tb_medida_valor.id_medida_valor = tb_produto.cd_medida_valor', 'left');
        $query = $this->db->get('tb_produto');
        return $query->result();
    }

    public function insert($data = array()) {
        $this->db->insert('tb_produto', $data);
        return $this->db->affected_rows();
    }

    public function getOne($id_produto) {
        $this->db->where('id_produto', $id_produto);
        $query = $this->db->get('tb_produto');
        return $query->row(0);
    }

    public function update($id_produto, $data = array()) {
        if ($id_produto > 0) {
            //filtra o cliente que será alterado 
            $this->db->where('id_produto', $id_produto);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_produto', $data);
            //retorno do número de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id_produto) {
        if ($id_produto > 0) {
            $this->db->where('id_produto', $id_produto);
            $this->db->delete('tb_produto');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
