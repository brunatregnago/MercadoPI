<?php

class CategoriaModel extends CI_Model {
    
    public function getAll() {
        //nome da tabela no DB
        $query = $this->db->get('tb_categoria');
        return $query->result();
    }
    
    public function insert() {
      $this->db->insert('tb_categoria', $data);
        return $this->db->affected_rows();
    }

    public function getOne($id) {
        $this->db->where('id_categoria', $id);
        $query = $this->db->get('tb_categoria');
        return $query->row(0);
    }

    public function update($id, $data = array()) {
        if ($id > 0) {
            //filtra o cliente que será alterado 
            $this->db->where('id_categoria', $id);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_categoria', $data);
            //retorno do número de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id_categoria', $id);
            $this->db->delete('tb_categoria');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}