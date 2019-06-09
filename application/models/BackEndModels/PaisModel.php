<?php

class PaisModel extends CI_Model {
    
    public function getAll() {
        //nome da tabela no DB
        $query = $this->db->get('tb_pais');
        return $query->result();
    }
    
    public function insert($data = array()) {
      $this->db->insert('tb_pais', $data);
        return $this->db->affected_rows();
    }

    public function getOne($id_pais) {
        $this->db->where('id_pais', $id_pais);
        $query = $this->db->get('tb_pais');
        return $query->row(0);
    }

    public function update($id_pais, $data = array()) {
        if ($id_pais > 0) {
            //filtra o cliente que será alterado 
            $this->db->where('id_pais', $id_pais);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_pais', $data);
            //retorno do número de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id_pais) {
        if ($id_pais > 0) {
            $this->db->where('id_pais', $id_pais);
            $this->db->delete('tb_pais');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}