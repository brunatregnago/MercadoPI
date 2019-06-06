<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Departamento extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        $this->load->model('BackEndModels/DepartamentoModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['departamento'] = $this->DepartamentoModel->getAll();
        $this->load->view('BackEnd/Header');
        $this->load->view('BackEnd/HeaderLateralProduto');
        $this->load->view('BackEnd/ListaDepartamento', $data);
        //$this->load->view('Footer');
    }

    public function cadastro() {
        $this->form_validation->set_rules('nome_departamento', 'nome_departamento', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/HeaderLateralProduto');
            $this->load->view('BackEnd/FormDepartamento');
            //$this->load->view('Footer');
        } else {

            $data = array(
                'nome_departamento' => $this->input->post('nome_departamento')
            );

            if ($this->DepartamentoModel->insert($data)) {
                //$this->session->set_flashdata('mensagem', 'Prova cadastrada.');
                redirect('Departamento/lista');
            } else {
                //$this->session->set_flashdata('mensagem', 'Erro ao cadastrar');
                redirect('Departamento/cadastro');
            }
        }
    }

    public function alterar($id_departamento) {
        if ($id_departamento > 0) {

            $this->form_validation->set_rules('nome_departamento', 'nome_departamento', 'required');

            if ($this->form_validation->run() == false) {
                $data['departamento'] = $this->DepartamentoModel->getOne($id_departamento);
                $this->load->view('BackEnd/Header');
                $this->load->view('BackEnd/HeaderLateralProduto');
                $this->load->view('BackEnd/FormDepartamento', $data);
                //$this->load->view('Footer');
            } else {
                $data = array(
                    'nome_departamento' => $this->input->post('nome_departamento')
                );
                if ($this->DepartamentoModel->update($id_departamento, $data)) {
                    //$this->session->set_flashdata('mensagem', 'Alterado com sucesso.');
                    redirect('Departamento/lista');
                } else {
                    //$this->session->set_flashdata('mensagem', 'Falha ao alterar prova.');
                    redirect('Departamento/alterar/' . $id_departamento);
                }
            }
        }
    }

    public function deletar($id_departamento) {
        if ($id_departamento > 0) {
            if ($this->DepartamentoModel->delete($id_departamento > 0)) {
                //$this->session->set_flashdata('mensagem', 'Prova deletada.');
            } else {
                //$this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('Departamento/lista');
    }

}
