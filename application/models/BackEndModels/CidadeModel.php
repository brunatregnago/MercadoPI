<?php

class CidadeModel extends CI_Model {
    
    public function getAll() {
        //nome da tabela no DB
        $this->db->select('tb_estado.nome_estado as estado,tb_cidade.*');
        $this->db->join('tb_estado', 'tb_estado.id_estado= tb_cidade.cd_estado', 'left');
        $query = $this->db->get('tb_cidade');
        return $query->result();
    }
    
    public function insert($data = array()) {
      $this->db->insert('tb_cidade', $data);
        return $this->db->affected_rows();
    }

    public function getOne($id_cidade) {
        $this->db->where('id_cidade', $id_cidade);
        $query = $this->db->get('tb_cidade');
        return $query->row(0);
    }

    public function update($id_cidade, $data = array()) {
        if ($id_cidade > 0) {
            //filtra o cliente que será alterado 
            $this->db->where('id_cidade', $id_cidade);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_cidade', $data);
            //retorno do número de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id_cidade) {
        if ($id_cidade > 0) {
            $this->db->where('id_cidade', $id_cidade);
            $this->db->delete('tb_cidade');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}