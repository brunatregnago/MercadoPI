<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Departamento extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('BackEndModels/LoginAdministradorModel');
        $this->LoginAdministradorModel->verificaLogin();

        $this->load->model('BackEndModels/DepartamentoModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['departamento'] = $this->DepartamentoModel->getAll();
        $this->load->view('BackEnd/Header');
        $this->load->view('BackEnd/ListaDepartamento', $data);
        //$this->load->view('Footer');
    }

    public function cadastro() {
        $this->form_validation->set_rules('nome_departamento', 'nome_departamento', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/FormDepartamento');
            //$this->load->view('Footer');
        } else {

            $data = array(
                'nome_departamento' => $this->input->post('nome_departamento')
            );

            if ($this->DepartamentoModel->insert($data)) {
                $this->session->set_flashdata('mensagem', 'Departamento cadastrado.');
                redirect('index.php/Departamento/lista');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar');
                redirect('index.php/Departamento/cadastro');
            }
        }
    }

    public function alterar($id_departamento) {
        if ($id_departamento > 0) {

            $this->form_validation->set_rules('nome_departamento', 'nome_departamento', 'required');

            if ($this->form_validation->run() == false) {
                $data['departamento'] = $this->DepartamentoModel->getOne($id_departamento);
                $this->load->view('BackEnd/Header');
                $this->load->view('BackEnd/FormDepartamento', $data);
                //$this->load->view('Footer');
            } else {
                $data = array(
                    'nome_departamento' => $this->input->post('nome_departamento')
                );
                if ($this->DepartamentoModel->update($id_departamento, $data)) {
                    $this->session->set_flashdata('mensagem', 'Departamento atualizado.');
                    redirect('index.php/Departamento/lista');
                } else {
                    $this->session->set_flashdata('mensagem', 'Falha ao alterar departamento.');
                    redirect('index.php/Departamento/alterar/' . $id_departamento);
                }
            }
        }
    }

    public function deletar($id_departamento) {
        if ($id_departamento > 0) {
            if ($this->DepartamentoModel->delete($id_departamento)) {
                $this->session->set_flashdata('mensagem', 'Departamento deletado.');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('index.php/Departamento/lista');
    }

}
