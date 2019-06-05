<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Estado extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        $this->load->model('BackEndModels/EstadoModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['estado'] = $this->EstadoModel->getAll();
        $this->load->view('BackEnd/Header');
        $this->load->view('BackEnd/HeaderLateralEntrega');
        $this->load->view('BackEnd/ListaEntrega', $data);
        //$this->load->view('Footer');
    }

    public function cadastro() {
        $this->form_validation->set_rules('nome_estado', 'nome_estado', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/HeaderLateralEntrega');
            $this->load->view('BackEnd/FormEstado');
            //$this->load->view('Footer');
        } else {

            $data = array(
                'nome_estado' => $this->input->post('nome_estado')
            );

            if ($this->EstadoModel->inserir($data)) {
                //$this->session->set_flashdata('mensagem', 'Prova cadastrada.');
                redirect('Estado/lista');
            } else {
                //$this->session->set_flashdata('mensagem', 'Erro ao cadastrar');
                redirect('Estado/cadastro');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {

            $this->form_validation->set_rules('nome_estado', 'nome_estado', 'required');

            if ($this->form_validation->run() == false) {
                $data['estado'] = $this->EstadoModel->getOne($id);
                $this->load->view('BackEnd/Header');
                $this->load->view('BackEnd/HeaderLateralEntrega');
                $this->load->view('BackEnd/FormEstado', $data);
                //$this->load->view('Footer');
            } else {
                $data = array(
                    'nome_estado' => $this->input->post('nome_estado')
                );
                if ($this->EstadoModel->update($id, $data)) {
                    //$this->session->set_flashdata('mensagem', 'Alterado com sucesso.');
                    redirect('Estado/lista');
                } else {
                    //$this->session->set_flashdata('mensagem', 'Falha ao alterar prova.');
                    redirect('Estado/alterar/' . $id);
                }
            }
        }
    }

    public function deletar($id) {
        if ($id > 0) {
            if ($this->EstadoModel->delete($id > 0)) {
                //$this->session->set_flashdata('mensagem', 'Prova deletada.');
            } else {
                //$this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('Estado/lista');
    }

}
