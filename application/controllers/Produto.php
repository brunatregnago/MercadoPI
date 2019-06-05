<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Produto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        $this->load->model('BackEndModels/ProdutoModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['produto'] = $this->ProdutoModel->getAll();
        $this->load->view('BackEnd/Header');
        $this->load->view('BackEnd/HeaderLateralProduto');
        $this->load->view('BackEnd/ListaProduto', $data);
        //$this->load->view('Footer');
    }

    public function cadastro() {
        $this->form_validation->set_rules('id_produto', 'id_produto', 'required');
        $this->form_validation->set_rules('nome_produto', 'nome_produto', 'required');
        $this->form_validation->set_rules('peso_produto', 'peso_produto', 'required');
        $this->form_validation->set_rules('valor_unitario_produto', 'valor_unitario_produto', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/HeaderLateralProduto');
            $this->load->view('BackEnd/FormProduto');
            //$this->load->view('Footer');
        } else {

            $data = array(
                'id_produto' => $this->input->post('id_produto'),
                'nome_produto' => $this->input->post('nome_produto'),
                'peso_produto' => $this->input->post('peso_produto'),
                'valor_unitario_produto' => $this->input->post('valor_unitario_produto')
            );

            if ($this->ProdutoModel->inserir($data)) {
                //$this->session->set_flashdata('mensagem', 'Prova cadastrada.');
                redirect('Produto/lista');
            } else {
                //$this->session->set_flashdata('mensagem', 'Erro ao cadastrar');
                redirect('Produto/cadastro');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {

            $this->form_validation->set_rules('id_produto', 'id_produto', 'required');
            $this->form_validation->set_rules('nome_produto', 'nome_produto', 'required');
            $this->form_validation->set_rules('peso_produto', 'peso_produto', 'required');
            $this->form_validation->set_rules('valor_unitario_produto', 'valor_unitario_produto', 'required');

            if ($this->form_validation->run() == false) {
                $data['produto'] = $this->ProdutoModel->getOne($id);
                $this->load->view('BackEnd/Header');
                $this->load->view('BackEnd/HeaderLateralProduto');
                $this->load->view('BackEnd/FormProduto', $data);
                //$this->load->view('Footer');
            } else {
                $data = array(
                    'nome_produto' => $this->input->post('nome_produto')
                );
                if ($this->ProdutoModel->update($id, $data)) {
                    //$this->session->set_flashdata('mensagem', 'Alterado com sucesso.');
                    redirect('Produto/lista');
                } else {
                    //$this->session->set_flashdata('mensagem', 'Falha ao alterar prova.');
                    redirect('Produto/alterar/' . $id);
                }
            }
        }
    }

    public function deletar($id) {
        if ($id > 0) {
            if ($this->ProdutoModel->delete($id > 0)) {
                //$this->session->set_flashdata('mensagem', 'Prova deletada.');
            } else {
                //$this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('Produto/lista');
    }

}
