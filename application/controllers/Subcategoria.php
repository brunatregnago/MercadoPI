<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Subcategoria extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        $this->load->model('BackEndModels/SubcategoriaModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['subcategoria'] = $this->SubcategoriaModel->getAll();
        $this->load->view('BackEnd/Header');
        $this->load->view('BackEnd/HeaderLateralProduto');
        $this->load->view('BackEnd/ListaSubcategoria', $data);
        //$this->load->view('Footer');
    }

    public function cadastro() {
        $this->form_validation->set_rules('nome_subcategoria', 'nome_subcategoria', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/HeaderLateralProduto');
            $this->load->view('BackEnd/FormSubcategoria');
            //$this->load->view('Footer');
        } else {

            $data = array(
                'nome_subcategoria' => $this->input->post('nome_subcategoria')
            );

            if ($this->SubcategoriaModel->inserir($data)) {
                //$this->session->set_flashdata('mensagem', 'Prova cadastrada.');
                redirect('Subcategoria/lista');
            } else {
                //$this->session->set_flashdata('mensagem', 'Erro ao cadastrar');
                redirect('Subcategoria/cadastro');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {

            $this->form_validation->set_rules('nome_subcategoria', 'nome_subcategoria', 'required');

            if ($this->form_validation->run() == false) {
                $data['subcategoria'] = $this->SubcategoriaModel->getOne($id);
                $this->load->view('BackEnd/Header');
                $this->load->view('BackEnd/HeaderLateralProduto');
                $this->load->view('BackEnd/FormSubcategoria', $data);
                //$this->load->view('Footer');
            } else {
                $data = array(
                    'nome_subcategoria' => $this->input->post('nome_subcategoria')
                );
                if ($this->SubcategoriaModel->update($id, $data)) {
                    //$this->session->set_flashdata('mensagem', 'Alterado com sucesso.');
                    redirect('Subcategoria/lista');
                } else {
                    //$this->session->set_flashdata('mensagem', 'Falha ao alterar prova.');
                    redirect('Subcategoria/alterar/' . $id);
                }
            }
        }
    }

    public function deletar($id) {
        if ($id > 0) {
            if ($this->SubcategoriaModel->delete($id > 0)) {
                //$this->session->set_flashdata('mensagem', 'Prova deletada.');
            } else {
                //$this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('Subcategoria/lista');
    }

}
