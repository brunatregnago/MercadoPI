<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('BackEndModels/LoginAdministradorModel');
    }

    public function index() {
        $this->load->view('FrontEnd/LoginAdministrador');
    }

    public function login() {
        $this->form_validation->set_rules('nome_usuario', 'nome_usuario', 'required');
        $this->form_validation->set_rules('senha_usuario', 'senha_usuario', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('FrontEnd/LoginAdministrador');
        } else {
            //busca no banco de dados, através do Model, saber se existe
            //o usuario com este email e senha recebidos por post            
            $usuario = $this->LoginAdministradorModel->getUsuario(
                    $this->input->post('nome_usuario'), $this->input->post('senha_usuario')
            );
            //valida se retornou algum registro, quer dizer que o usuário
            //é existente
            if ($usuario) {
                //montamos um array com as informações do usuário logado
                $data = array(
                    'idUsuario' => $usuario->id_usuario,
                    'nome_usuario' => $usuario->nome_usuario,
                    'logado' => TRUE
                );
                //mandamos o codeigniter salvar na sessão os dados do usuário
                //perceba que o método set_userdata é diferente do método
                //set_flashdata, pois ele salva dados permanentes enquanto
                //durar a sessão.
                $this->session->set_userdata($data);
                //abre a pagina principal do sistema
                redirect($this->config->base_url().'Produto');
            } else {
                $this->session->set_flashdata('mensagem', 'Usuário e Senha incorretos!');
                //redireciona obrigando o login...
                redirect($this->config->base_url() . 'Usuario');
            }
        }
    }

    public function sair() {
        //apaga todo conteúdo da sessão do usuário
        $this->session->sess_destroy();
        redirect($this->config->base_url());
    }

}
