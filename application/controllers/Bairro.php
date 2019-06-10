<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Bairro extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();
        $this->load->model('BackEndModels/CidadeModel');
        $this->load->model('BackEndModels/BairroModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['bairro'] = $this->BairroModel->getAll();
        $this->load->view('BackEnd/Header');
        $this->load->view('BackEnd/HeaderLateralEntrega');
        $this->load->view('BackEnd/ListaEntrega', $data);
        //$this->load->view('Footer');
    }

    public function cadastro() {
        $this->form_validation->set_rules('id_cidade', 'id_cidade', 'required');
        $this->form_validation->set_rules('nome_bairro', 'nome_bairro', 'required');

        if ($this->form_validation->run() == false) {
            $data['cidade'] = $this->CidadeModel->getAll();
            $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/HeaderLateralEntrega');
            $this->load->view('BackEnd/FormBairro', $data);
            //$this->load->view('Footer');
        } else {

            $data = array(
                'cd_cidade' => $this->input->post('id_cidade'),
                'nome_bairro' => $this->input->post('nome_bairro')
            );

            if ($this->BairroModel->insert($data)) {
                //$this->session->set_flashdata('mensagem', 'Prova cadastrada.');
                redirect('Bairro/lista');
            } else {
                //$this->session->set_flashdata('mensagem', 'Erro ao cadastrar');
                redirect('Bairro/cadastro');
            }
        }
    }

    public function alterar($id_bairro) {
        if ($id_bairro > 0) {

            $this->form_validation->set_rules('id_cidade', 'id_cidade', 'required');
            $this->form_validation->set_rules('nome_bairro', 'nome_bairro', 'required');

            if ($this->form_validation->run() == false) {
                $data['cidade'] = $this->CidadeModel->getAll();
                $data['bairro'] = $this->BairroModel->getOne($id_bairro);
                $this->load->view('BackEnd/Header');
                $this->load->view('BackEnd/HeaderLateralEntrega');
                $this->load->view('BackEnd/FormBairro', $data);
                //$this->load->view('Footer');
            } else {
                $data = array(
                    'cd_cidade' => $this->input->post('id_cidade'),
                    'nome_bairro' => $this->input->post('nome_bairro')
                );
                if ($this->BairroModel->update($id_bairro, $data)) {
                    //$this->session->set_flashdata('mensagem', 'Alterado com sucesso.');
                    redirect('Bairro/lista');
                } else {
                    //$this->session->set_flashdata('mensagem', 'Falha ao alterar prova.');
                    redirect('Bairro/alterar/' . $id_bairro);
                }
            }
        }
    }

    public function deletar($id_bairro) {
        if ($id_bairro > 0) {
            if ($this->BairroModel->delete($id_bairro > 0)) {
                //$this->session->set_flashdata('mensagem', 'Prova deletada.');
            } else {
                //$this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('Bairro/lista');
    }

}
