<?php

class PaisModel extends CI_Model {
    
    public function getAll() {
        //nome da tabela no DB
        $query = $this->db->get('tb_bairro');
        return $query->result();
    }
    
    public function insert() {
      $this->db->insert('tb_bairro', $data);
        return $this->db->affected_rows();
    }

    public function getOne($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_bairro');
        return $query->row(0);
    }

    public function update($id, $data = array()) {
        if ($id > 0) {
            //filtra o cliente que será alterado 
            $this->db->where('id', $id);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_bairro', $data);
            //retorno do número de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->delete('tb_bairro');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}