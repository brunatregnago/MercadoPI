<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Produto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('BackEndModels/LoginAdministradorModel');
        $this->LoginAdministradorModel->verificaLogin();

        $this->load->model('BackEndModels/ProdutoModel');
        $this->load->model('BackEndModels/DepartamentoModel');
        $this->load->model('BackEndModels/CategoriaModel');
        $this->load->model('BackEndModels/SubcategoriaModel');
        $this->load->model('BackEndModels/UnidadeMedidaModel');
        $this->load->model('BackEndModels/MedidaValorModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['produto'] = $this->ProdutoModel->getAll();
        $this->load->view('BackEnd/Header');
        $this->load->view('BackEnd/ListaProduto', $data);
        //$this->load->view('Footer');
    }

    public function cadastro() {
        $this->form_validation->set_rules('id_departamento', 'id_departamento', 'required');
        $this->form_validation->set_rules('id_categoria', 'id_categoria', 'required');
        $this->form_validation->set_rules('id_subcategoria', 'id_subcategoria', 'required');
        $this->form_validation->set_rules('nome_produto', 'nome_produto', 'required');
        $this->form_validation->set_rules('peso_produto', 'peso_produto', 'required');
        $this->form_validation->set_rules('id_medida', 'id_medida', 'required');
        $this->form_validation->set_rules('valor_unitario_produto', 'valor_unitario_produto', 'required');
        $this->form_validation->set_rules('id_medida_valor', 'id_medida_valor', 'required');

        if ($this->form_validation->run() == false) {
            $data['departamento'] = $this->DepartamentoModel->getAll();
            $data['categoria'] = $this->CategoriaModel->getAll();
            $data['subcategoria'] = $this->SubcategoriaModel->getAll();
            $data['medida_valor'] = $this->MedidaValorModel->getAll();
            $data['unidade_medida'] = $this->UnidadeMedidaModel->getAll();
            $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/FormProduto', $data);
        } else {

            $data = array(
                'id_produto' => $this->input->post('id_produto'),
                'cd_departamento' => $this->input->post('id_departamento'),
                'cd_categoria' => $this->input->post('id_categoria'),
                'cd_subcategoria' => $this->input->post('id_subcategoria'),
                'nome_produto' => $this->input->post('nome_produto'),
                'peso_produto' => $this->input->post('peso_produto'),
                'cd_unidade_medida' => $this->input->post('id_medida'),
                'valor_unitario_produto' => $this->input->post('valor_unitario_produto'),
                'cd_medida_valor' => $this->input->post('id_medida_valor')
            );
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_width'] = 1024;
            $config['max_height'] = 768;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('mensagem', $error);
                redirect('index.php/Produto/Cadastro');
                exit();
            } else {
                $data['imagem_produto'] = $this->upload->data('file_name');
            }
            if ($this->ProdutoModel->insert($data)) {
                $this->session->set_flashdata('mensagem', 'Produto cadastrado com sucesso.');
                redirect('index.php/Produto/cadastro');
            } else {
                unlink('./uploads/' . $data['imagem_produto']);
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar.');
                redirect('index.php/Produto/cadastro');
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
                    'cd_unidade_medida' => $this->input->post('id_medida'),
                    'valor_unitario_produto' => $this->input->post('valor_unitario_produto'),
                    'cd_medida_valor' => $this->input->post('id_medida_valor')
                );

                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_width'] = 1024;
                $config['max_height'] = 768;
                $config['encrypt_name'] = true;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('userfile')) {
                    //Cria uma sessão com o error e redireciona
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-succsess">' . $error . '</div>');
                    redirect('Produto/cadastrar');
                    exit();
                } else {
                    $data['imagem_produto'] = $this->upload->data('file_name');
                }


                if ($this->ProdutoModel->update($id_produto, $data)) {
                    $this->session->set_flashdata('mensagem', 'Produto atualizado com sucesso.');
                    redirect('index.php/Produto/lista');
                } else {
                    $this->session->set_flashdata('mensagem', 'Falha ao atualizar.');
                    redirect('index.php/Produto/alterar/' . $id_produto);
                }
            }
        }
    }

    public function deletar($id_produto) {
        if ($id_produto > 0) {
            unlink('./uploads/' . $data['imagem_produto']);
            if ($this->ProdutoModel->delete($id_produto)) {
                $this->session->set_flashdata('mensagem', 'Produto deletado.');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('index.php/Produto/lista');
    }

}
