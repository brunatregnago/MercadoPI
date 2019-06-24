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
        $this->db->inner('tb_promocao','tb_promocao.id_promocao = tb_produto_promocao.cd_promocao','left');
        $this->db->inner('tb_produto','tb_produto.id_produto = tb_produto_promocao.cd_produto','left');
        $query = $this->db->get('tb_produto_promocao');
        return $query->result();
    }

    public function insert($data = array()) {
        $this->db->insert('tb_produto_promocao', $data);
        return $this->db->affected_rows();
    }


    public function update($cd_promocao, $data = array()) {
        if ($cd_promocao > 0) {
            //filtra o cliente que será alterado 
            $this->db->where('id_promocao', $cd_promocao);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_produto_promocao', $data);
            //retorno do número de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($cd_promocao) {
        if ($cd_promocao > 0) {
            $this->db->where('cd_promocao', $cd_promocao);
            $this->db->delete('tb_produto_promocao');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
