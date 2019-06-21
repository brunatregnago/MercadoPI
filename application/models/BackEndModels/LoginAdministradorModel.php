<?php

class LoginAdministradorModel extends CI_Model {

    public function getUsuario($nome_usuario, $senha_usuario) {
        $this->db->select('tb_usuario.*');
        $this->db->where('nome_usuario', $nome_usuario);
        $this->db->where('senha_usuario', sha1($senha_usuario . 'b4t4t4fr1t4'));
        $this->db->where('cd_acesso = 1');
        $query = $this->db->get('tb_usuario');
        return $query->row(0);
    }

    public function verificaLogin() {
        $logado = $this->session->userdata('logado');
        $idUsuario = $this->session->userdata('idUsuario');
        if ((!isset($logado)) || ($logado != true) || ($idUsuario <= 0)) {
            redirect($this->config->base_url() . 'Usuario/login');
        }
    }

    public function getAll() {
        $query = $this->db->get('tb_usuario');
        return $query->result();
    }

}
