<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Promocao extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        $this->load->model('BackEndModels/PromocaoModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['promocao'] = $this->PromocaoModel->getAll();
        $this->load->view('BackEnd/Header');
        $this->load->view('BackEnd/ListaPromocao', $data);
        //$this->load->view('Footer');
    }

    public function cadastro() {
        $this->form_validation->set_rules('nome_promocao', 'nome_promocao', 'required');
        $this->form_validation->set_rules('inicio_promocao', 'inicio_promocao', 'required');
        $this->form_validation->set_rules('fim_promocao', 'fim_promocao', 'required');
        $this->form_validation->set_rules('porcento_desconto', 'porcento_desconto', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/FormPromocao', $data);
            //$this->load->view('Footer');
        } else {

            $data = array(
                'nome_promocao' => $this->input->post('nome_promocao'),
                'inicio_promocao' => $this->input->post('inicio_promocao'),
                'fim_promocao' => $this->input->post('fim_promocao'),
                'porcento_desconto' => $this->input->post('oorcento_desconto')
            );

            if ($this->PromocaoModel->insert($data)) {
                //$this->session->set_flashdata('mensagem', 'Prova cadastrada.');
                redirect('Promocao/lista');
            } else {
                //$this->session->set_flashdata('mensagem', 'Erro ao cadastrar');
                redirect('Promocao/cadastro');
            }
        }
    }

    public function alterar($id_promocao) {
        if ($id_promocao > 0) {

            $this->form_validation->set_rules('nome_promocao', 'nome_promocao', 'required');
            $this->form_validation->set_rules('inicio_promocao', 'inicio_promocao', 'required');
            $this->form_validation->set_rules('fim_promocao', 'fim_promocao', 'required');
            $this->form_validation->set_rules('porcento_desconto', 'porcento_desconto', 'required');

            if ($this->form_validation->run() == false) {
                $data['promocao'] = $this->PromocaoModel->getOne($id_promocao);
                $this->load->view('BackEnd/Header');
                $this->load->view('BackEnd/FormPromocao', $data);
                //$this->load->view('Footer');
            } else {
                $data = array(
                    'nome_promocao' => $this->input->post('nome_promocao'),
                    'inicio_promocao' => $this->input->post('inicio_promocao'),
                    'fim_promocao' => $this->input->post('fim_promocao'),
                    'porcento_desconto' => $this->input->post('oorcento_desconto')//input == entrada
                );
                if ($this->PromocaoModel->update($id_promocao, $data)) {
                    //$this->session->set_flashdata('mensagem', 'Alterado com sucesso.');
                    redirect('Promocao/lista');
                } else {
                    //$this->session->set_flashdata('mensagem', 'Falha ao alterar prova.');
                    redirect('Promocao/alterar/' . $id_promocao);
                }
            }
        }
    }

    public function deletar($id_promocao) {
        if ($id_promocao > 0) {
            if ($this->PromocaoModel->delete($id_promocao > 0)) {
                //$this->session->set_flashdata('mensagem', 'Prova deletada.');
            } else {
                //$this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('Promocao/lista');
    }

}
