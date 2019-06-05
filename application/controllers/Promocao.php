<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Promocao extends CI_Controller {
   
    public function __construct(){
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

        if ($this->form_validation->run() == false) {
        $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/FormPromocao');
            //$this->load->view('Footer');
        } else {

            $data = array(
                'nome_promocao' => $this->input->post('nome_promocao')
            );

            if ($this->PromocaoModel->inserir($data)) {
                //$this->session->set_flashdata('mensagem', 'Prova cadastrada.');
                redirect('Promocao/lista');
            } else {
                //$this->session->set_flashdata('mensagem', 'Erro ao cadastrar');
                redirect('Promocao/cadastro');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {

            $this->form_validation->set_rules('nome_promocao', 'nome_promocao', 'required');

            if ($this->form_validation->run() == false) {
                $data['promocao'] = $this->PromocaoModel->getOne($id);
        $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/FormPromocao', $data);
                //$this->load->view('Footer');
            } else {
                $data = array(
                    'nome_promocao' => $this->input->post('nome_promocao')//input == entrada
                );
                if ($this->PromocaoModel->update($id, $data)) {
                    //$this->session->set_flashdata('mensagem', 'Alterado com sucesso.');
                    redirect('Promocao/lista');
                } else {
                    //$this->session->set_flashdata('mensagem', 'Falha ao alterar prova.');
                    redirect('Promocao/alterar/' . $id);
                }
            }
        }
    }
    public function deletar($id) {
        if ($id > 0) {
            if ($this->PromocaoModel->delete($id > 0)) {
                //$this->session->set_flashdata('mensagem', 'Prova deletada.');
            } else {
                //$this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('Promocao/lista');
    }
    
}
