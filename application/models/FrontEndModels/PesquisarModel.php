<?php

class PesquisarModel extends CI_Model {

    public function getBuscaByNomeProduto($produto) {
        $this->db->select('tb.*,tb_unidade_medida.medida, tb_medida_valor.medida_valor');
        $this->db->from('tb_produto AS tb');
        $this->db->join('tb_unidade_medida', 'tb_unidade_medida.id_medida = tb.cd_unidade_medida', 'left');
        $this->db->join('tb_medida_valor', 'tb_medida_valor.id_medida_valor = tb.cd_medida_valor', 'left');
        $this->db->GROUP_BY('tb.nome_produto'); 
        $this->db->order_by("tb.id_produto", "ASC");
        $this->db->where('tb.nome_produto LIKE','%'.$produto.'%');
        $query = $this->db->get('tb_produto');
        return $query->result();
        
    }

}
