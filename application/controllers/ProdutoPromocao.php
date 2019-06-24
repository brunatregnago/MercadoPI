<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class ProdutoPromocao extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('BackEndModels/LoginAdministradorModel');
        $this->LoginAdministradorModel->verificaLogin();

        $this->load->model('BackEndModels/ProdutoModel');
        $this->load->model('BackEndModels/PromocaoModel');

        $this->load->model('BackEndModels/ProdutoPromocaoModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['produtopromocao'] = $this->ProdutoPromocaoModel->getAll();
        $this->load->view('BackEnd/Header');
        $this->load->view('BackEnd/ListaProdutoPromocao', $data);
        //$this->load->view('Footer');
    }

    public function cadastro() {
        $this->form_validation->set_rules('id_promocao', 'id_promocao', 'required');
        $this->form_validation->set_rules('id_produto', 'id_produto', 'required');

        if ($this->form_validation->run() == false) {
            $data['promocao'] = $this->PromocaoModel->getAll();
            $data['produto'] = $this->ProdutoModel->getAll();
            $data['produtopromocao'] = $this->ProdutoPromocaoModel->getAll();
            $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/FormProdutoPromocao', $data);
            //$this->load->view('Footer');
        } else {

            $data = array(
                'cd_promocao' => $this->input->post('id_promocao'),
                'cd_produto' => $this->input->post('id_produto')
            );

            if ($this->ProdutoPromocaoModel->insert($data)) {
                $this->session->set_flashdata('mensagem', 'Promoção cadastrada com sucesso.');
                redirect('index.php/ProdutoPromocao/cadastro');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar');
                redirect('index.php/ProdutoPromocao/cadastro');
            }
        }
    }

    public function deletar($cd_promocao) {
        if ($cd_promocao > 0) {
            if ($this->ProdutoPromocaoModel->delete($cd_promocao)) {
                $this->session->set_flashdata('mensagem', 'Promoção deletada.');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('index.php/Promocao/lista');
    }

}
