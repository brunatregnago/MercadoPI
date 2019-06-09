<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Subcategoria extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        $this->load->model('BackEndModels/SubcategoriaModel');
        $this->load->model('BackEndModels/CategoriaModel');
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
        $this->form_validation->set_rules('id_categoria', 'id_categoria', 'required');
        $this->form_validation->set_rules('nome_subcategoria', 'nome_subcategoria', 'required');

        if ($this->form_validation->run() == false) {
            $data['categoria'] = $this->CategoriaModel->getAll();
            $data['subcategoria'] = $this->SubcategoriaModel->getAll();
            $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/HeaderLateralProduto');
            $this->load->view('BackEnd/FormSubcategoria', $data);
            //$this->load->view('Footer');
        } else {

            $data = array(
                'cd_categoria' => $this->input->post('id_categoria'),
                'nome_subcategoria' => $this->input->post('nome_subcategoria')
            );

            if ($this->SubcategoriaModel->insert($data)) {
                //$this->session->set_flashdata('mensagem', 'Prova cadastrada.');
                redirect('Subcategoria/lista');
            } else {
                //$this->session->set_flashdata('mensagem', 'Erro ao cadastrar');
                redirect('Subcategoria/cadastro');
            }
        }
    }

    public function alterar($id_subcategoria) {
        
        if ($id_subcategoria > 0) {

            $this->form_validation->set_rules('id_categoria', 'id_categoria', 'required');
            $this->form_validation->set_rules('nome_subcategoria', 'nome_subcategoria', 'required');

            if ($this->form_validation->run() == false) {
                
                $data['categoria'] = $this->CategoriaModel->getAll();
                $data['subcategoria'] = $this->SubcategoriaModel->getOne($id_subcategoria);
                $this->load->view('BackEnd/Header');
                $this->load->view('BackEnd/HeaderLateralProduto');
                $this->load->view('BackEnd/FormSubcategoria', $data);
                //$this->load->view('Footer');
            } else {
                $data = array(
                    'cd_categoria' => $this->input->post('id_categoria'),
                    'nome_subcategoria' => $this->input->post('nome_subcategoria')
                );
                if ($this->SubcategoriaModel->update($id_subcategoria, $data)) {
                    //$this->session->set_flashdata('mensagem', 'Alterado com sucesso.');
                    redirect('Subcategoria/lista');
                } else {
                    //$this->session->set_flashdata('mensagem', 'Falha ao alterar prova.');
                    redirect('Subcategoria/alterar/' . $id_subcategoria);
                }
            }
        }
    }

    public function deletar($id_subcategoria) {
        if ($id_subcategoria > 0) {
            if ($this->SubcategoriaModel->delete($id_subcategoria > 0)) {
                //$this->session->set_flashdata('mensagem', 'Prova deletada.');
            } else {
                //$this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('Subcategoria/lista');
    }

}
