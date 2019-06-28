<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProdutoPromocaoModel
 *
 * @author Bruna
 */
class ProdutoPromocaoModel extends CI_Model{
    
    public function getAll() {
        $this->db->select('tb_promocao.*,tb_produto.*, tb_produto_promocao.*');
        $this->db->join('tb_promocao','tb_promocao.id_promocao = tb_produto_promocao.cd_promocao','left');
        $this->db->join('tb_produto','tb_produto.id_produto = tb_produto_promocao.cd_produto', 'left');
        $query = $this->db->get('tb_produto_promocao');
        return $query->result();
    }

    public function insert($data = array()) {
        $this->db->insert('tb_produto_promocao', $data);
        return $this->db->affected_rows();
    }


    public function delete($cd_produto) {
        if ($cd_produto > 0) {
            $this->db->where('cd_produto', $cd_produto);
            $this->db->delete('tb_produto_promocao');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
