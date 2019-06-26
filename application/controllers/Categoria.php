<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('BackEndModels/LoginAdministradorModel');
        $this->LoginAdministradorModel->verificaLogin();

        $this->load->model('BackEndModels/CategoriaModel');

        $this->load->model('BackEndModels/DepartamentoModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['categoria'] = $this->CategoriaModel->getAll();
        $this->load->view('BackEnd/Header');
        $this->load->view('BackEnd/ListaCategoria', $data);
        //$this->load->view('Footer');
    }

    public function cadastro() {
        $this->form_validation->set_rules('id_departamento', 'id_departamento', 'required');
        $this->form_validation->set_rules('nome_categoria', 'nome_categoria', 'required');

        if ($this->form_validation->run() == false) {
            $data['departamento'] = $this->DepartamentoModel->getAll();
            $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/FormCategoria', $data);
        } else {

            $data = array(
                'cd_departamento' => $this->input->post('id_departamento'),
                'nome_categoria' => $this->input->post('nome_categoria')
            );

            if ($this->CategoriaModel->insert($data)) {
                $this->session->set_flashdata('mensagem', 'Categoria cadastrada com sucesso.');
                redirect('index.php/Categoria/lista');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar');
                redirect('index.php/Categoria/cadastro');
            }
        }
    }

    public function alterar($id_categoria) {
        if ($id_categoria > 0) {

            $this->form_validation->set_rules('id_departamento', 'id_departamento', 'required');
            $this->form_validation->set_rules('nome_categoria', 'nome_categoria', 'required');

            if ($this->form_validation->run() == false) {

                $data['departamento'] = $this->DepartamentoModel->getAll();
                $data['categoria'] = $this->CategoriaModel->getOne($id_categoria);
                $this->load->view('BackEnd/Header');
                $this->load->view('BackEnd/HeaderLateralProduto');
                $this->load->view('BackEnd/FormCategoria', $data);
                //$this->load->view('Footer');
            } else {
                $data = array(
                    'cd_departamento' => $this->input->post('id_departamento'),
                    'nome_categoria' => $this->input->post('nome_categoria')
                );
                if ($this->CategoriaModel->update($id_categoria, $data)) {
                    $this->session->set_flashdata('mensagem', 'Categoria atualizada com sucesso.');
                    redirect('index.php/Categoria/lista');
                } else {
                    $this->session->set_flashdata('mensagem', 'Falha ao atualizar categoria.');
                    redirect('index.php/Categoria/alterar/' . $id_categoria);
                }
            }
        }
    }

    public function deletar($id_categoria) {
        if ($id_categoria > 0) {
            if ($this->CategoriaModel->delete($id_categoria)) {
                $this->session->set_flashdata('mensagem', 'Categoria deletada.');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('index.php/Categoria/lista');
    }

}
