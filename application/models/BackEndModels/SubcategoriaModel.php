<?php

class SubcategoriaModel extends CI_Model {
    
    public function getAll() {
        //nome da tabela no DB
        $query = $this->db->get('tb_subcategoria');
        return $query->result();
    }
    
    public function insert($data = array()) {
      $this->db->insert('tb_subcategoria', $data);
        return $this->db->affected_rows();
    }

    public function getOne($id_subcategoria) {
        $this->db->where('id_subcategoria', $id_subcategoria);
        $query = $this->db->get('tb_subcategoria');
        return $query->row(0);
    }

    public function update($id_subcategoria, $data = array()) {
        if ($id_subcategoria > 0) {
            //filtra o cliente que será alterado 
            $this->db->where('id_subcategoria', $id_subcategoria);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_subcategoria', $data);
            //retorno do número de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id_subcategoria) {
        if ($id_subcategoria > 0) {
            $this->db->where('id_subcategoria', $id_subcategoria);
            $this->db->delete('tb_subcategoria');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}