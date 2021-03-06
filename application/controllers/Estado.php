<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Estado extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('BackEndModels/LoginAdministradorModel');
        $this->LoginAdministradorModel->verificaLogin();

        $this->load->model('BackEndModels/EstadoModel');
        $this->load->model('BackEndModels/PaisModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['estado'] = $this->EstadoModel->getAll();
        $this->load->view('BackEnd/Header');
        $this->load->view('BackEnd/ListaEstado', $data);
        //$this->load->view('Footer');
    }

    public function cadastro() {
        $this->form_validation->set_rules('id_pais', 'id_pais', 'required');
        $this->form_validation->set_rules('nome_estado', 'nome_estado', 'required');

        if ($this->form_validation->run() == false) {
            $data['pais'] = $this->PaisModel->getAll();
            $this->load->view('BackEnd/Header');
            $this->load->view('BackEnd/FormEstado', $data);
            //$this->load->view('Footer');
        } else {

            $data = array(
                'cd_pais' => $this->input->post('id_pais'),
                'nome_estado' => $this->input->post('nome_estado')
            );

            if ($this->EstadoModel->insert($data)) {
                $this->session->set_flashdata('mensagem', 'Estado cadastrado com sucesso.');
                redirect('index.php/Estado/lista');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar.');
                redirect('index.php/Estado/cadastro');
            }
        }
    }

    public function alterar($id_estado) {
        if ($id_estado > 0) {
            $this->form_validation->set_rules('id_pais', 'id_pais', 'required');
            $this->form_validation->set_rules('nome_estado', 'nome_estado', 'required');

            if ($this->form_validation->run() == false) {
                $data['pais'] = $this->PaisModel->getAll();                
                $data['estado'] = $this->EstadoModel->getOne($id_estado);
                $this->load->view('BackEnd/Header');
                $this->load->view('BackEnd/FormEstado', $data);
                //$this->load->view('Footer');
            } else {
                $data = array(
                    'cd_pais' => $this->input->post('id_pais'),
                    'nome_estado' => $this->input->post('nome_estado')
                );
                if ($this->EstadoModel->update($id_estado, $data)) {
                    $this->session->set_flashdata('mensagem', 'Estado atualizado com sucesso.');
                    redirect('index.php/Estado/lista');
                } else {
                    $this->session->set_flashdata('mensagem', 'Falha ao atualizar.');
                    redirect('index.php/Estado/alterar/' . $id_estado);
                }
            }
        }
    }

    public function deletar($id_estado) {
        if ($id_estado > 0) {
            if ($this->EstadoModel->delete($id_estado)) {
                $this->session->set_flashdata('mensagem', 'Estado deletado.');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar.');
            }
        }
        redirect('index.php/Estado/lista');
    }

}
