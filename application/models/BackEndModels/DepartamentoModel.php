<?php

class DepartamentoModel extends CI_Model {

    public function getAll() {
        //nome da tabela no DB
        $query = $this->db->get('tb_departamento');
        return $query->result();
    }

    public function insert($data = array()) {
        $this->db->insert('tb_departamento', $data);
        return $this->db->affected_rows();
    }

    public function getOne($id_departamento) {
        $this->db->where('id_departamento', $id_departamento);
        $query = $this->db->get('tb_departamento');
        return $query->row(0);
    }

    public function update($id_departamento, $data = array()) {
        if ($id_departamento > 0) {
            //filtra o cliente que será alterado 
            $this->db->where('id_departamento', $id_departamento);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_departamento', $data);
            //retorno do número de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id_departamento) {
        if ($id_departamento > 0) {
            $this->db->where('id_departamento', $id_departamento);
            $this->db->delete('tb_departamento');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
