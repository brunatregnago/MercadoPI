<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Cidade extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();
        $this->load->model('BackEndModels/EstadoModel');
        $this->load->model('BackEndModels/CidadeModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['cidade'] = $this->CidadeModel->getAll();
        $this->load->view('BackEnd/Header');
        $this->load->view('BackEnd/HeaderLateralEntrega');
        $this->load->view('BackEnd/ListaCidade', $data);
        //$this->load->view('Footer');
    }

    public function cadastro() {
        $this->form_validation->set_rules('id_estado', 'id_estado', 'required');
        $this->form_validation->set_rules('nome_cidade', 'nome_cidade', 'required');

        if ($this->form_validation->run() == false) {
            $data['estado'] = $this->EstadoModel->getAll();
            $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/HeaderLateralEntrega');
            $this->load->view('BackEnd/FormCidade', $data);
            //$this->load->view('Footer');
        } else {

            $data = array(
                'cd_estado' => $this->input->post('id_estado'),
                'nome_cidade' => $this->input->post('nome_cidade')
            );

            if ($this->CidadeModel->insert($data)) {
                //$this->session->set_flashdata('mensagem', 'Prova cadastrada.');
                redirect('Cidade/lista');
            } else {
                //$this->session->set_flashdata('mensagem', 'Erro ao cadastrar');
                redirect('Cidade/cadastro');
            }
        }
    }

    public function alterar($id_cidade) {
        if ($id_cidade > 0) {

            $this->form_validation->set_rules('id_estado', 'id_estado', 'required');
            $this->form_validation->set_rules('nome_cidade', 'nome_cidade', 'required');

            if ($this->form_validation->run() == false) {
                $data['estado'] = $this->EstadoModel->getAll();
                $data['cidade'] = $this->CidadeModel->getOne($id_cidade);
                $this->load->view('BackEnd/Header');
                $this->load->view('BackEnd/HeaderLateralEntrega');
                $this->load->view('BackEnd/FormCidade', $data);
                //$this->load->view('Footer');
            } else {
                $data = array(
                    'cd_estado' => $this->input->post('id_estado'),
                    'nome_cidade' => $this->input->post('nome_cidade')
                );
                if ($this->CidadeModel->update($id_cidade, $data)) {
                    //$this->session->set_flashdata('mensagem', 'Alterado com sucesso.');
                    redirect('Cidade/lista');
                } else {
                    //$this->session->set_flashdata('mensagem', 'Falha ao alterar prova.');
                    redirect('Cidade/alterar/' . $id_cidade);
                }
            }
        }
    }

    public function deletar($id_cidade) {
        if ($id_cidade > 0) {
            if ($this->CidadeModel->delete($id_cidade > 0)) {
                //$this->session->set_flashdata('mensagem', 'Prova deletada.');
            } else {
                //$this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('Cidade/lista');
    }

}
