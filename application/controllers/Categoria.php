<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        $this->load->model('BackEndModels/CategoriaModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['categoria'] = $this->CategoriaModel->getAll();
        $this->load->view('BackEnd/Header');
        $this->load->view('BackEnd/HeaderLateralProduto');
        $this->load->view('BackEnd/ListaCategoria', $data);
        //$this->load->view('Footer');
    }

    public function cadastro() {
        $this->form_validation->set_rules('nome_categoria', 'nome_categoria', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->model('DepartamentoModel');
            $data['departamento'] = $this->DepartamentoModel->getAll();
            $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/HeaderLateralProduto');
            $this->load->view('BackEnd/FormCategoria');
            //$this->load->view('Footer');
        } else {

            $data = array(
                'nome_categoria' => $this->input->post('nome_categoria')
            );

            if ($this->CategoriaModel->insert($data)) {
                //$this->session->set_flashdata('mensagem', 'Prova cadastrada.');
                redirect('Categoria/lista');
            } else {
                //$this->session->set_flashdata('mensagem', 'Erro ao cadastrar');
                redirect('Categoria/cadastro');
            }
        }
    }

    public function alterar($id_categoria) {
        if ($id_categoria > 0) {

            $this->form_validation->set_rules('nome_categoria', 'nome_categoria', 'required');

            if ($this->form_validation->run() == false) {
                $data['categoria'] = $this->CategoriaModel->getOne($id_categoria);
                $this->load->view('BackEnd/Header');
                $this->load->view('BackEnd/HeaderLateralProduto');
                $this->load->view('BackEnd/FormCategoria', $data);
                //$this->load->view('Footer');
            } else {
                $data = array(
                    'nome_categoria' => $this->input->post('nome_categoria')
                );
                if ($this->CategoriaModel->update($id_categoria, $data)) {
                    //$this->session->set_flashdata('mensagem', 'Alterado com sucesso.');
                    redirect('Categoria/lista');
                } else {
                    //$this->session->set_flashdata('mensagem', 'Falha ao alterar prova.');
                    redirect('Categoria/alterar/' . $id_categoria);
                }
            }
        }
    }

    public function deletar($id_categoria) {
        if ($id_categoria > 0) {
            if ($this->CategoriaModel->delete($id_categoria > 0)) {
                //$this->session->set_flashdata('mensagem', 'Prova deletada.');
            } else {
                //$this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('Categoria/lista');
    }

}
