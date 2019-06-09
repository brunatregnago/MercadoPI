<?php

class PromocaoModel extends CI_Model {
    
    public function getAll() {
        //nome da tabela no DB
        $query = $this->db->get('tb_promocao');
        return $query->result();
    }
    
    public function insert($data = array()) {
      $this->db->insert('tb_promocao', $data);
        return $this->db->affected_rows();
    }

    public function getOne($id_promocao) {
        $this->db->where('id_promocao', $id_promocao);
        $query = $this->db->get('tb_promocao');
        return $query->row(0);
    }

    public function update($id_promocao, $data = array()) {
        if ($id_promocao > 0) {
            //filtra o cliente que será alterado 
            $this->db->where('id_promocao', $id_promocao);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_promocao', $data);
            //retorno do número de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id_promocao) {
        if ($id_promocao > 0) {
            $this->db->where('id_promocao', $id_promocao);
            $this->db->delete('tb_promocao');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}