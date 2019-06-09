<?php

class ProdutoModel extends CI_Model {
    
    public function getAll() {
        //nome da tabela no DB
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