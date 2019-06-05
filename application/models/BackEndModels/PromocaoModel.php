<?php

class PromocaoModel extends CI_Model {
    
    public function getAll() {
        //nome da tabela no DB
        $query = $this->db->get('tb_promocao');
        return $query->result();
    }
    
    public function insert() {
      $this->db->insert('tb_promocao', $data);
        return $this->db->affected_rows();
    }

    public function getOne($id) {
        $this->db->where('id_promocao', $id);
        $query = $this->db->get('tb_promocao');
        return $query->row(0);
    }

    public function update($id, $data = array()) {
        if ($id > 0) {
            //filtra o cliente que será alterado 
            $this->db->where('id_promocao', $id);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_promocao', $data);
            //retorno do número de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id_promocao', $id);
            $this->db->delete('tb_promocao');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}