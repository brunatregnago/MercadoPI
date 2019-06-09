<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Pais extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        $this->load->model('BackEndModels/PaisModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['pais'] = $this->PaisModel->getAll();
        $this->load->view('BackEnd/Header');
        $this->load->view('BackEnd/HeaderLateralEntrega');
        $this->load->view('BackEnd/ListaEntrega', $data);
        //$this->load->view('Footer');
    }

    public function cadastro() {
        $this->form_validation->set_rules('nome_pais', 'nome_pais', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/HeaderLateralEntrega');
            $this->load->view('BackEnd/FormPais');
            //$this->load->view('Footer');
        } else {

            $data = array(
                'nome_pais' => $this->input->post('nome_pais')
            );

            if ($this->PaisModel->insert($data)) {
                //$this->session->set_flashdata('mensagem', 'Prova cadastrada.');
                redirect('Pais/lista');
            } else {
                //$this->session->set_flashdata('mensagem', 'Erro ao cadastrar');
                redirect('Pais/cadastro');
            }
        }
    }

    public function alterar($id_pais) {
        if ($id_pais > 0) {

            $this->form_validation->set_rules('nome_pais', 'nome_pais', 'required');

            if ($this->form_validation->run() == false) {
                $data['pais'] = $this->PaisModel->getOne($id);
                $this->load->view('BackEnd/Header');
                $this->load->view('BackEnd/HeaderLateralEntrega');
                $this->load->view('BackEnd/FormPais', $data);
                //$this->load->view('Footer');
            } else {
                $data = array(
                    'nome_pais' => $this->input->post('nome_pais')
                );
                if ($this->PaisModel->update($id_pais, $data)) {
                    //$this->session->set_flashdata('mensagem', 'Alterado com sucesso.');
                    redirect('Pais/lista');
                } else {
                    //$this->session->set_flashdata('mensagem', 'Falha ao alterar prova.');
                    redirect('Pais/alterar/' . $id_pais);
                }
            }
        }
    }

    public function deletar($id_pais) {
        if ($id_pais > 0) {
            if ($this->PaisModel->delete($id_pais > 0)) {
                //$this->session->set_flashdata('mensagem', 'Prova deletada.');
            } else {
                //$this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('Pais/lista');
    }

}
