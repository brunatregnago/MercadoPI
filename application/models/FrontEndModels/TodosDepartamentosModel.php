<?php

class TodosDepartamentosModel {
    
    public function getAll() {
        
        $this->db->select('tb_departamento.nome_departamento,tb_categoria.nome_categoria');
        $this->db->join('tb_departamento', 'tb_departamento.id_departamento = tb_produto.cd_departamento', 'left');
        $query = $this->db->get('tb_categoria');
        return $query->result();
    }
}
