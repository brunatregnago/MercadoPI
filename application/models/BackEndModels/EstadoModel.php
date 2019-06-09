<?php

class EstadoModel extends CI_Model {
    
    public function getAll() {
        //nome da tabela no DB
        $query = $this->db->get('tb_estado');
        return $query->result();
    }
    
    public function insert($data = array()) {
      $this->db->insert('tb_estado', $data);
        return $this->db->affected_rows();
    }

    public function getOne($id_estado) {
        $this->db->where('id_estado', $id_estado);
        $query = $this->db->get('tb_estado');
        return $query->row(0);
    }

    public function update($id_estado, $data = array()) {
        if ($id_estado > 0) {
            //filtra o cliente que será alterado 
            $this->db->where('id_estado', $id_estado);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_estado', $data);
            //retorno do número de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id_estado) {
        if ($id_estado > 0) {
            $this->db->where('id_estado', $id_estado);
            $this->db->delete('tb_estado');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}