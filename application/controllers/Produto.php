<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Produto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        $this->load->model('BackEndModels/ProdutoModel');
        $this->load->model('BackEndModels/DepartamentoModel');
        $this->load->model('BackEndModels/CategoriaModel');
        $this->load->model('BackEndModels/SubcategoriaModel');
        $this->load->model('BackEndModels/MedidaValorModel');
        $this->load->model('BackEndModels/UnidadeMedidaModel');
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
        $this->form_validation->set_rules('id_departamento', 'id_departamento', 'required');
        $this->form_validation->set_rules('id_categoria', 'id_categoria', 'required');
        $this->form_validation->set_rules('id_subcategoria', 'id_subcategoria', 'required');
        $this->form_validation->set_rules('id_produto', 'id_produto', 'required');
        $this->form_validation->set_rules('nome_produto', 'nome_produto', 'required');
        $this->form_validation->set_rules('peso_produto', 'peso_produto', 'required');
        $this->form_validation->set_rules('unidade_medida', 'unidade_medida', 'required');
        $this->form_validation->set_rules('valor_unitario_produto', 'valor_unitario_produto', 'required');
        $this->form_validation->set_rules('medida_valor', 'medida_valor', 'required');

        if ($this->form_validation->run() == false) {
            $data['departamento'] = $this->DepartamentoModel->getAll();
            $data['categoria'] = $this->CategoriaModel->getAll();
            $data['subcategoria'] = $this->SubcategoriaModel->getAll();
            $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/HeaderLateralProduto');
            $this->load->view('BackEnd/FormProduto', $data);
            //$this->load->view('Footer');
        } else {

            $data = array(
                'cd_departamento' => $this->input->post('id_departamento'),
                'cd_categoria' => $this->input->post('id_categoria'),
                'id_subcategoria' => $this->input->post('id_subcategoria'),
                'id_produto' => $this->input->post('id_produto'),
                'nome_produto' => $this->input->post('nome_produto'),
                'peso_produto' => $this->input->post('peso_produto'),
                'cd_unidade_medida' => $this->input->post('unidade_medida'),
                'valor_unitario_produto' => $this->input->post('valor_unitario_produto'),
                'cd_medida_valor' => $this->input->post('medida_valor')
            );

            if ($this->ProdutoModel->insert($data)) {
                //$this->session->set_flashdata('mensagem', 'Prova cadastrada.');
                redirect('Produto/lista');
            } else {
                //$this->session->set_flashdata('mensagem', 'Erro ao cadastrar');
                redirect('Produto/cadastro');
            }
        }
    }

    public function alterar($id_produto) {
        if ($id_produto > 0) {

            $this->form_validation->set_rules('id_produto', 'id_produto', 'required');
            $this->form_validation->set_rules('nome_produto', 'nome_produto', 'required');
            $this->form_validation->set_rules('peso_produto', 'peso_produto', 'required');
            $this->form_validation->set_rules('valor_unitario_produto', 'valor_unitario_produto', 'required');

            if ($this->form_validation->run() == false) {
                $data['produto'] = $this->ProdutoModel->getOne($id_produto);
                $this->load->view('BackEnd/Header');
                $this->load->view('BackEnd/HeaderLateralProduto');
                $this->load->view('BackEnd/FormProduto', $data);
                //$this->load->view('Footer');
            } else {
                $data = array(
                    'nome_produto' => $this->input->post('nome_produto')
                );
                if ($this->ProdutoModel->update($id_produto, $data)) {
                    //$this->session->set_flashdata('mensagem', 'Alterado com sucesso.');
                    redirect('Produto/lista');
                } else {
                    //$this->session->set_flashdata('mensagem', 'Falha ao alterar prova.');
                    redirect('Produto/alterar/' . $id_produto);
                }
            }
        }
    }

    public function deletar($id_produto) {
        if ($id_produto > 0) {
            if ($this->ProdutoModel->delete($id_produto > 0)) {
                //$this->session->set_flashdata('mensagem', 'Prova deletada.');
            } else {
                //$this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('Produto/lista');
    }

}
