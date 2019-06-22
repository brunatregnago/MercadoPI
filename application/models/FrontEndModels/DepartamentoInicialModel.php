<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DepartamentoInicialModel
 *
 * @author Bruna
 */
class DepartamentoInicialModel extends CI_Model{
    
    public function getAll() {
        //nome da tabela no DB
        $this->db->select('tb_departamento.*');
        $this->db->order_by('id_departamento', 'asc');
        $this->db->limit(1);
        $query = $this->db->get('tb_departamento');
        return $query->result();
    }
}
