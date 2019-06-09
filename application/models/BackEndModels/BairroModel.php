<?php

class BairroModel extends CI_Model {
    
    public function getAll() {
        //nome da tabela no DB
        $query = $this->db->get('tb_bairro');
        return $query->result();
    }
    
    public function insert($data = array()) {
      $this->db->insert('tb_bairro', $data);
        return $this->db->affected_rows();
    }

    public function getOne($id_bairro) {
        $this->db->where('id_bairro', $id_bairro);
        $query = $this->db->get('tb_bairro');
        return $query->row(0);
    }

    public function update($id_bairro, $data = array()) {
        if ($id_bairro > 0) {
            //filtra o cliente que será alterado 
            $this->db->where('id_bairro', $id_bairro);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_bairro', $data);
            //retorno do número de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id_bairro) {
        if ($id_bairro > 0) {
            $this->db->where('id_bairro', $id_bairro);
            $this->db->delete('tb_bairro');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}